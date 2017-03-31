<?php

namespace My\User;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = ['user_id', 'craft', 'area', 'birthday', 'daily_wage', 'evaluate'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
