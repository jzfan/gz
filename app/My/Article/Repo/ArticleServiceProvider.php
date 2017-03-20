<?php

namespace My\Article\Repo;

use My\Article\Tag;
use My\Article\Article;
use My\Article\Repo\EloquantArticle;
use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('My\Article\Repo\ArticleInterface', function ($app) {
            return new EloquantArticle(
                    new Article,
                    new Tag
                );
        });
    }
}
