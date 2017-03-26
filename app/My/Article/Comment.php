<?php

namespace My\Article;

use My\User\Customer;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['customer_id', 'decoration_id', 'content'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
