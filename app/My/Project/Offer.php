<?php

namespace My\Project;

use My\User\User;
use My\Project\Apply;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['amount', 'apply_id', 'leader_id', 'data'];

    protected $casts = ['data' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function apply()
    {
        return $this->belongsTo(Apply::class);
    }
}
