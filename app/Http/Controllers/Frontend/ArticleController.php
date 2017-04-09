<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gz\Article\Repo\ArticleInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleController extends Controller
{
	private $article;

	public function __construct(ArticleInterface $article)
	{
		$this->article = $article;
	}

    public function index(Request $request)
    {
    	$articles = $this->article->byPage(4);
        return view('frontend.article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = $this->article->byId($id);
        return view('frontend.article.show', compact('article'));
    }
}
