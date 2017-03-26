<?php

namespace My\User;

use My\User\Traits\RoleTrait;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
	use RoleTrait;
}
