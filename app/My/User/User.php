<?php

namespace My\User;

use My\Project\Offer;
use My\Project\Apply;
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

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function customerApplies()
    {
        return $this->hasMany(Apply::class, 'customer_id', 'id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }

    public function isCustomer()
    {
        return $this->role == 'customer';
    }

    public function isLeader()
    {
        return $this->role == 'leader';
    }

    public function isWorker()
    {
        return $this->role == 'worker';
    }

    public function isEditor()
    {
        return $this->role == 'editor';
    }


}
