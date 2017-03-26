<?php

namespace My\Project;

use My\User\Leader;
use My\Project\Decoration;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['amount', 'decoration_id', 'leader_id'];

    public function leader()
    {
        return $this->belongsTo(Leader::class);
    }

    public function decoration()
    {
        return $this->belongsTo(Decoration::class);
    }
}
