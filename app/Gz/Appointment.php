<?php

namespace Gz;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'phone', 'block', 'mark'];
}
