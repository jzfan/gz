<?php

namespace My\Project;

use My\User\User;
use My\File\Image;
use My\Project\Offer;
use My\Article\Comment;
use My\File\Traits\ImageAbleTrait;
use Illuminate\Database\Eloquent\Model;

class Decoration extends Model
{
	use ImageAbleTrait;

    protected $fillable = ['customer_id', 'manager_id', 'block', 'square', 'plan', 'budget', 'status'];

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
