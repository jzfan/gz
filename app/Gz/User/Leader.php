<?php

namespace Gz\User;

use Gz\User\User;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['user_id', 'WO', 'rank', 'points', 'fans', 'quality', 'working_age', 'work_area', 'ex_company', 'tel', 'from', 'deposit'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
