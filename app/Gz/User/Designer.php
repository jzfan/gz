<?php

namespace Gz\User;

use Gz\Gallery\Gallery;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $fillable = ['name', 'working_age', 'feedback_rate', 'precept', 'good_at', 'honor', 'good_at', 'avatar', 'company'];
    protected $casts = [
    	'honor' => 'array',
    	'good_at' => 'array',
    ];

    public function galleries()
    {
    	return $this->morphMany(Gallery::class, 'galleryable');
    }
}
