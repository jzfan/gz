<?php

namespace My\Project;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['apply_item_id', 'title', 'description', 'unit', 'price'];
}
