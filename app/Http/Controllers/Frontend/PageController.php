<?php

namespace App\Http\Controllers\Frontend;

use Gz\Gallery\Repo\ImageRepo;
use Illuminate\Http\Request;
use Gz\User\Repo\LeaderRepo;
use Gz\Project\Repo\OfferRepo;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;
use Gz\Article\Repo\ArticleInterface;

class PageController extends Controller
{
	private $offer;
	private $user;
	private $comment;
	private $image;
	private $article;

	public function __construct(OfferRepo $offer, LeaderRepo $leader, CommentRepo $comment, ImageRepo $image, ArticleInterface $article)
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
    	$leaders = $this->leader->rankList(10);
    	// dd($leaders->first()->leaderUser);
    	$comments = $this->comment->newList(10);
    	$images = $this->image->newList(4);
    	$articles = $this->article->newList(10);
        return view('frontend.index', compact('leaders', 'offers', 'comments', 'images', 'articles'));
    }

}
