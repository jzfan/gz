<?php

namespace Gz\Article\Repo;

use Gz\Article\Tag;
use Gz\Article\Article;
use Gz\Article\Repo\EloquantArticle;
use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Gz\Article\Repo\ArticleInterface', function ($app) {
            return new EloquantArticle(
                    new Article,
                    new Tag
                );
        });
    }
}
