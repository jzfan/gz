<?php

namespace Gz\Gallery;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['gallery_id', 'name', 'path'];
    protected $touches = ['gallery'];
    
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
