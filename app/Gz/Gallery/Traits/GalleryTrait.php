<?php

namespace Gz\Gallery\Traits;

use Gz\Gallery\Gallery;

trait GalleryTrait
{
	public function gallery()
	{
	    return $this->morphMany(Gallery::class, 'galleryable');
	}
}