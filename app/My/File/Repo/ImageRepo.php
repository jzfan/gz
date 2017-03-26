<?php

namespace My\File\Repo;

use My\File\Image;

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