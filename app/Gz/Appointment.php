<?php

namespace Gz;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'phone', 'block', 'mark'];

    public function newCountB4Days($n)
    {
        return $this->where('created_at', '>', Carbon::now()->subDays($n))->count();
    }
}
