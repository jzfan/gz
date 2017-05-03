<?php

namespace Gz\Article;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title', 'content'];
}
