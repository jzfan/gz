<?php

namespace Gz\Project;

use Gz\User\User;
use Gz\Gallery\Traits\GalleryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Apply extends Model
{
	use SoftDeletes, GalleryTrait;

    protected $fillable = ['name', 'phone', 'plan', 'block', 'leader_id', 'budget', 'square'];
	protected $dates = ['deleted_at'];

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offer()
    {
        return $this->hasOne(\Gz\Project\Offer::class);
    }
}
