<?php

namespace Gz\User;

use Gz\Project\Apply;
use Gz\Project\Offer;
use Gz\Article\Article;
use Gz\Article\Comment;
use Gz\User\Traits\RoleTrait;
use Gz\Gallery\Traits\GalleryTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, RoleTrait, GalleryTrait;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'qq', 'avatar', 'role', 'api_token'
    ];

    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    protected $dates = ['deleted_at'];

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
        return $this->hasMany(Apply::class);
    }

    public function leaderApplies()
    {
        return $this->hasMany(Apply::class, 'leader_id', 'id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
