<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use My\Article\Repo\ArticleInterface;

class ArticleController extends Controller
{
	private $article;

	public function __construct(ArticleInterface $article)
	{
		$this->article = $article;
	}

    public function index()
    {
        $articles = $this->article->byPage(1, 10);
        dd($articles);
    }

    public function byTag($tag)
    {
        $articles = $this->article->byTag($tag);
        dd($articles);
    }
}
