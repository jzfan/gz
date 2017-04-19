<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Gallery\Repo\GalleryRepo;
use Gz\Project\Repo\OfferRepo;
use Gz\Article\Repo\ArticleRepo;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	private $offer;
	private $user;
	private $comment;
	private $gallery;
	private $article;

	public function __construct(OfferRepo $offer, LeaderRepo $leader, CommentRepo $comment, GalleryRepo $gallery, ArticleRepo $article)
	{
		$this->offer = $offer;
		$this->leader = $leader;
		$this->comment = $comment;
		$this->gallery = $gallery;
		$this->article = $article;
	}

    public function index()
    {
    	$offers = $this->offer->newList(10);
    	$leaders = $this->leader->rankList(4);
    	$comments = $this->comment->newList(10);
    	$gallerys = $this->gallery->newList(4);
    	$articles = $this->article->newList(5);
    	$feng_shui = $this->article->listByTag('居家风水', 5);
    	$industry = $this->article->listByTag('行业', 5);
        return view('frontend.index', compact('leaders', 'offers', 'comments', 'galleries', 'articles', 'feng_shui', 'industry'));
    }

}
