<?php

namespace Gz\Gallery;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['gallery_id', 'name', 'path'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
