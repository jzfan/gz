<?php

namespace Gz\Gallery\Repo;

use Gz\Gallery\Image;
use Gz\Gallery\Gallery;

class GalleryRepo
{
	private $gallery;
	protected $image;

	public function __construct(Gallery $gallery, Image $image)
	{
		$this->gallery = $gallery;
		$this->image = $image;
	}

	public function newConstructions($n)
	{
	    return $this->gallery->where('galleryable_type', 'Gz\Project\Offer')->orderBy('updated_at', 'desc')->take($n)->get();
	}

	public function indexPage($n)
	{
		return $this->gallery->withCount('images')->latest()->paginate($n);
	}

	public function byId($id)
	{
		return $this->gallery->with('images')->findOrFail($id);
	}

	public function updateById($id, $data)
	{
		return $this->gallery->findOrFail($id)->update($data);
	}

	public function storeImageById($id, $data)
	{
		return $this->gallery->findOrFail($id)->images()->create($data);
	}
}