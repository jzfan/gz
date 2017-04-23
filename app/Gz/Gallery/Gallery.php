<?php

namespace Gz\Gallery;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	
    protected $fillable = ['name', 'description', 'galleryable_type', 'galleryable_id'];
    protected $appends = ['page_image'];

    public function images()
    {
    	return $this->hasMany(Image::class);
    }

    public function getPageImageAttribute()
    {
        $image = $this->images()->latest()->first();
    	return is_null($image) ? '/images/tes-bg.jpg' : $image->path;
    }

    public function galleryable()
    {
        return $this->morphTo();
    }
}
