<?php

namespace My\User;

use My\File\Image;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = ['user_id', 'WO', 'rank', 'points', 'fans', 'quality', 'working_age', 'work_area', 'ex_company', 'tel', 'from', 'deposit'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
