<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Gallery\Repo\ImageRepo;
use Gz\Project\Repo\OfferRepo;
use Gz\Article\Repo\ArticleRepo;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleController extends Controller
{
	private $article;
    private $offer;
    private $leader;
    private $image;

	public function __construct(ArticleRepo $article, OfferRepo $offer, LeaderRepo $leader, ImageRepo $image)
	{
		$this->article = $article;
        $this->offer = $offer;
        $this->leader = $leader;
        $this->image = $image;
	}

    public function index()
    {
        $this->validate(request(), [
                'tag' => 'required|exists:tags,name'
            ]);
        $articles = $this->article->byTagPage(request('tag'), 8);
        return view('frontend.article.index', compact('articles'));
    }

    public function leaderIndex()
    {
        $articles = $this->article->byTagPage('工头', 8);
        $offers = $this->offer->newList(3);
        $leaders = $this->leader->rankList(5);
        $pictures = $this->image->newList(6);
        $tags = $this->article->allTags();
        return view('frontend.article.index-leader', compact('articles', 'offers', 'leaders', 'pictures', 'tags'));
    }

    public function show($id)
    {
        $article = $this->article->byId($id);
        return view('frontend.article.show', compact('article'));
    }
}
