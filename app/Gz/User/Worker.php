<?php

namespace Gz\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Worker extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at', 'birthday'];

    protected $fillable = ['user_id', 'craft', 'area', 'birthday', 'daily_wage', 'evaluate'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
