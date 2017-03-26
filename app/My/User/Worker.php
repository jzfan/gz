<?php

namespace My\User;

use My\User\Traits\RoleTrait;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
	use RoleTrait;

    protected $fillable = ['user_id', 'craft', 'area', 'birthday', 'daily_wage', 'evaluate'];

}
