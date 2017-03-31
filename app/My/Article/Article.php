<?php

namespace My\Article;

use My\User\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['editor_id', 'title', 'page_image', 'content', 'published_at'];

    protected $dates = ['published_at'];

    public function scopePublished($q)
    {
        return $q->where('published_at', '<>', null);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
