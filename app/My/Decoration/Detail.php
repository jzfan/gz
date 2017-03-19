<?php

namespace My\Decoration;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['project_id', 'title', 'description', 'unit', 'price', 'amount'];
}
