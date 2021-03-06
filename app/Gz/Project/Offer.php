<?php

namespace Gz\Project;

use Gz\User\User;
use Gz\Project\Apply;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    
    protected $fillable = ['amount', 'apply_id', 'leader_id', 'data', 'accepted_at', 'done_at', 'user_id'];

    protected $casts = ['data' => 'array'];
    protected $dates = ['accepted_at', 'done_at'];
    protected $append = ['status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galleries()
    {
        return $this->morphMany(\Gz\Gallery\Gallery::class, 'galleryable');
    }

    public function apply()
    {
        return $this->belongsTo(Apply::class);
    }

    public function getStatusAttribute()
    {
        if ($this->done_at) {
            return '完成';
        }
        if ($this->accepted_at) {
            return '施工';
        }
        return '报价';
    }
}