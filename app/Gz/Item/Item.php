<?php

namespace Gz\Item;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Item extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
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
