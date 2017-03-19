<?php

namespace My\Decoration;

use Illuminate\Database\Eloquent\Model;

class Decoration extends Model
{
    protected $fillable = ['customer_id', 'manager_id', 'block', 'square', 'plan', 'budget', 'status'];
}
