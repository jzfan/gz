<?php

namespace Gz\Gallery\Repo;

use Gz\Gallery\Image;

class ImageRepo
{
	private $image;

	public function __construct(Image $image)
	{
		$this->image = $image;
	}

	public function newList($n)
	{
	    return $this->image->orderBy('id', 'desc')->take($n)->get();
	}
}