<?php

namespace Gz\Article;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];

    public $timestamps = false;
}
