<?php

namespace Gz\User;

use Gz\Project\Apply;
use Gz\Project\Offer;
use Gz\Article\Article;
use Gz\Article\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'users';

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

    public function images()
    {
        return $this->morphMany(\Gz\Gallery\Image::class, 'imageable');
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

    public function transRole()
    {
        switch ($this->role) {
            case 'admin':
                return '管理员';
            case 'editor':
                return '编辑';
            case 'leader':
                return '工头';
            case 'worker':
                return '工人';
            default:
                return '业主';
        }
    }
}
