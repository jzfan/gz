<?php

namespace Gz\Item;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'single'];

    public function getSingleAttribute($value)
    {
        return $value == 0 ? '否': '是'; 
    }

    public function options()
    {
        return $this->hasMany(ItemOption::class);
    }
}
