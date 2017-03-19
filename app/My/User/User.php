<?php

namespace My\User;

use My\Project\Decoration;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function manager()
    {
        return $this->hasOne(Manager::class);
    }

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function decorations()
    {
        return $this->hasMany(Decoration::class, 'customer_id', 'id');
    }

    public function projecter()
    {
        return $this->hasMany(Decoration::class, 'manager_id', 'id');
    }

    public function isEditor()
    {
        $role = \Auth::user()->role;
        return $role == 'editor' or $role == 'admin';
    }

    public function scopeOfRole($q, $role)
    {
        return $q->whereRole($role)->OrderBy('id', 'desc');
    }
}
