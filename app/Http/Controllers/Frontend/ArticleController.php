<?php

namespace App\Http\Controllers\Frontend;

use Gz\Article\Tag;
use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Project\Repo\OfferRepo;
use Gz\Article\Repo\ArticleRepo;
use Gz\Gallery\Repo\GalleryRepo;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleController extends Controller
{
	private $article;
    private $offer;
    private $leader;
    private $gallery;

	public function __construct(ArticleRepo $article, OfferRepo $offer, LeaderRepo $leader, GalleryRepo $gallery)
	{
		$this->article = $article;
        $this->offer = $offer;
        $this->leader = $leader;
        $this->gallery = $gallery;
	}

    public function index()
    {
        $this->validate(request(), [
                'tag' => 'exists:tags,name'
            ]);
        $articles = $this->article->byTagPage(request('tag'), 8);
        return view('frontend.article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = $this->article->byId($id);
        $hots = $this->article->newList(5);
        $rand_tag = Tag::inRandomOrder()->first()->name;
        $tag_list = $this->article->whereHas('tags', function($q) use($rand_tag){
            $q->whereName($rand_tag);
        })->take(5)->get();
        return view('frontend.article.show', compact('article', 'hots', 'rand_tag', 'tag_list'));
    }
}
