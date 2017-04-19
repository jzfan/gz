<?php

namespace Gz\Gallery;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	
    protected $fillable = ['name', 'description'];
    protected $appends = ['page_image'];

    public function galleryable()
    {
        return $this->morphTo();
    }
    
    public function images()
    {
    	return $this->hasMany(Image::class);
    }

    public function getPageImageAttribute()
    {
    	return $this->images()->latest()->first()->path;
    }
}
