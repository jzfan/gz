<?php

namespace My\User;

use My\Project\Decoration;
use My\User\Traits\RoleTrait;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	use RoleTrait;

	public function decorations()
	{
	    return $this->hasMany(Decoration::class);
	}
}
