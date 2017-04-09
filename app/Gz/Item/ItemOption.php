<?php

namespace Gz\Item;

use Illuminate\Database\Eloquent\Model;

class ItemOption extends Model
{
    protected $guarded = [];

    protected $casts = [
    	'description' => 'array'
    ];
}
