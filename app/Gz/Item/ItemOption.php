<?php

namespace Gz\Item;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ItemOption extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $guarded = [];

    protected $casts = [
    	'description' => 'array'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
