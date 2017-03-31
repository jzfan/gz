<?php

namespace My\Article;

use My\User\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['customer_id', 'decoration_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
