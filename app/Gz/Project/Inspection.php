<?php

namespace Gz\Project;

use Gz\Project\Offer;
use Gz\Gallery\Gallery;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = ['offer_id'];

    public function offer()
    {
    	return $this->belongsTo(Offer::class);
    }

    public function gallery()
    {
    	return $this->morphOne(Gallery::class, 'galleryable');
    }
}
