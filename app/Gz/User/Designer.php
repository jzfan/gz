<?php

namespace Gz\User;

use Gz\Gallery\Gallery;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $fillable = ['name', 'working_age', 'feedback_rate', 'precept', 'good_at', 'honer', 'good_at'];
    protected $casts = [
    	'goot_at' => 'array',
    	'honer' => 'array'
    ];

    public function galleries()
    {
    	return $this->morphMany(Gallery::class, 'galleryable');
    }
}
