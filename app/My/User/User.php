<?php

namespace My\User;

use My\Project\Decoration;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->morphTo();
    }

    public function isAdmin()
    {
        return $this->role_type == 'My\User\Admin';
    }
}
