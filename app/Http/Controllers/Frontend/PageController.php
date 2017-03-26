<?php

namespace App\Http\Controllers\Frontend;

use My\File\Repo\ImageRepo;
use Illuminate\Http\Request;
use My\User\Repo\LeaderRepo;
use My\Project\Repo\OfferRepo;
use My\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;
use My\Article\Repo\ArticleInterface;

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
    	$comments = $this->comment->newList(10);
    	$images = $this->image->newList(4);
    	$articles = $this->article->newList(10);
        return view('frontend.index', compact('leaders', 'offers', 'comments', 'images', 'articles'));
    }

}
