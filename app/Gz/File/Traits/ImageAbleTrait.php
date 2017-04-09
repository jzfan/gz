<?php

namespace Gz\File\Traits;

use Gz\File\Image;

trait ImageAbleTrait
{
	public function images()
	{
	    return $this->morphMany(Image::class, 'imageable');
	}
}