<?php

namespace Gz\Gallery;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['imageable_id', 'imageable_type', 'group', 'title', 'description', 'link', 'path'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
