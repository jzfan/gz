<?php

namespace My\Project;

use Illuminate\Database\Eloquent\Model;

class ApplyItem extends Model
{
    protected $fillable = ['offer_id', 'type', 'detail_id', 'quantity'];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
