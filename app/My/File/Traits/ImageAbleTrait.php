<?php

namespace My\File\Traits;

use My\File\Image;

trait ImageAbleTrait
{
	public function images()
	{
	    return $this->morphMany(Image::class, 'imageable');
	}
}