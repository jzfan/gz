<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Gallery\Repo\ImageRepo;
use Gz\Project\Repo\OfferRepo;
use Gz\Article\Repo\ArticleRepo;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	private $offer;
	private $user;
	private $comment;
	private $image;
	private $article;

	public function __construct(OfferRepo $offer, LeaderRepo $leader, CommentRepo $comment, ImageRepo $image, ArticleRepo $article)
	{
		$this->offer = $offer;
		$this->leader = $leader;
		$this->comment = $comment;
		$this->image = $image;
		$this->article = $article;
	}

    public function index()
    {
    	$offers = $this->offer->newList(10);
    	$leaders = $this->leader->rankList(4);
    	// dd($leaders->first()->leaderUser);
    	$comments = $this->comment->newList(10);
    	$images = $this->image->newList(4);
    	$articles = $this->article->newList(10);
        return view('frontend.index', compact('leaders', 'offers', 'comments', 'images', 'articles'));
    }

}
