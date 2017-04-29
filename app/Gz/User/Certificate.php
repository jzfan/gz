<?php

namespace Gz\User;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['user_id', 'name', 'picture'];
}
