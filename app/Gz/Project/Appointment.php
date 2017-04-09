<?php

namespace Gz\Project;

use Gz\User\User;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'phone', 'plan', 'block', 'leader_id'];

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }
}
