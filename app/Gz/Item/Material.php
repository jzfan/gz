<?php

namespace Gz\Item;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Material extends Model
{
	use SoftDeletes;

    protected $guarded = [];
	protected $dates = ['deleted_at'];
}
