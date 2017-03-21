<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use My\Article\Repo\ArticleInterface;
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
    	$page = $request->page ?? 1;
    	$limit = 6;
    	$pageData = $this->article->byPage($page, $limit);
    	$articles = new LengthAwarePaginator(
    			$pageData->items,
    			$pageData->total,
    			$limit,
    			$page,
                ['path'=>'articles']
    		);
        return view('frontend.article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = $this->article->byId($id);
        return view('frontend.article.show', compact('article'));
    }
}
