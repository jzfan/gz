<?php

namespace Gz\Project;

use Gz\User\User;
use Gz\File\Image;
use Gz\Project\Offer;
use Gz\Article\Comment;
use Gz\File\Traits\ImageAbleTrait;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
	use ImageAbleTrait;

    protected $fillable = ['customer_id', 'manager_id', 'block', 'square', 'plan', 'budget', 'status', 'leader_id'];

    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Offer::class, 'project_id', 'id');
    }
}
