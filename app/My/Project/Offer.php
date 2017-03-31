<?php

namespace My\Project;

use My\User\User;
use My\Project\Decoration;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['amount', 'decoration_id', 'leader_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function decoration()
    {
        return $this->belongsTo(Decoration::class);
    }
}
