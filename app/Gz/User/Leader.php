<?php

namespace Gz\User;

use Gz\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leader extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
    protected $fillable = ['user_id', 'WO', 'rank', 'points', 'fans', 'quality', 'working_age', 'work_area', 'ex_company', 'tel', 'from', 'deposit'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
