<?php

namespace Gz\Gallery\Repo;

use Gz\Gallery\Image;
use Gz\Gallery\Gallery;

class GalleryRepo
{
	private $gallery;
	protected $image;
	protected $type = [
		'leader' => 'Gz\User\User',
		'working' => 'Gz\Project\Apply',
		'inspection' => 'Gz\Project\inspection',
		'design' => 'Gz\User\designer',
	];

	public function __construct(Gallery $gallery, Image $image)
	{
		$this->gallery = $gallery;
		$this->image = $image;
	}

	public function type()
	{
		return join(',', array_keys($this->type));
	}

	public function newList($n)
	{
	    return $this->image->orderBy('id', 'desc')->take($n)->get();
	}

	public function pageByType($type, $n)
	{
		return $this->gallery->where('galleryable_type', $this->type[$type])->withCount('images')->latest()->paginate($n);
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

	public function create($data)
	{
		$data['galleryable_type'] = $this->type[$data['type']];
		return $this->gallery->create($data);
	}

	public function delete($id)
	{
		$gallery = $this->gallery->findOrFail($id);
		$gallery->images()->delete();
		return $gallery->delete();
	}

	public function newDesignList($n)
	{
	    return $this->gallery->with('galleryable')
	    		->where('galleryable_type', $this->type['design'])
	    		->latest()->take($n)->get();
	}

	public function newWorking($n)
	{
	    return $this->gallery->where('galleryable_type', $this->type['working'])
	    				->orderBy('updated_at', 'desc')->take($n)->get();
	}
}