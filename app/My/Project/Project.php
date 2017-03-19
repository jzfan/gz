<?php

namespace My\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['docoration_id', 'title', 'type', 'detail_id'];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
