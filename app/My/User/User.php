<?php

namespace My\User;

use My\Project\Decoration;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function leader()
    {
        return $this->hasOne(Leader::class);
    }

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function customerDecorations()
    {
        return $this->hasMany(Decoration::class, 'customer_id', 'id');
    }

    public function leaderDecorations()
    {
        return $this->hasMany(Decoration::class, 'leader_id', 'id');
    }

    public function articles()
    {
        return $this->user()->hasMany(Article::class);
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }
}
