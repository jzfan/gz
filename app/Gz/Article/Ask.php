<?php

namespace Gz\Article;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $fillable = ['question', 'answer'];
}
