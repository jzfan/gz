<?php

namespace My\Project;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'phone', 'plan', 'block'];
}
