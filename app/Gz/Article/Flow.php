<?php

namespace Gz\Article;

use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    protected $fillable = ['title', 'text'];
    protected $casts = [
    	'text' => 'array'
    ];
}
