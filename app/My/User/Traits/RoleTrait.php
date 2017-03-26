<?php

namespace My\User\Traits;

use My\User\User;

trait RoleTrait
{
	public function user()
	{
	    return $this->morphOne(User::class, 'role');
	}
}