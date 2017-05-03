<?php

namespace Gz;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['key', 'value'];
    public $timestamps = false;
}
