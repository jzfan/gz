<?php

namespace Gz\Gallery\Traits;

use Gz\Gallery\Image;

trait ImageAbleTrait
{
	public function images()
	{
	    return $this->morphMany(Image::class, 'imageable');
	}
}