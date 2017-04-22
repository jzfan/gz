<?php

namespace Gz\Article;

use Gz\User\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'title', 'intro', 'text', 'published_at'];

    protected $dates = ['published_at'];
    protected $appends = ['page_image'];

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

    public function getPageImageAttribute()
    {
        return preg_match('/<img .+?\/>/', $this->text, $img) ? $img[0] : '';
    }
}
