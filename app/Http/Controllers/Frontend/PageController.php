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
    	$leaders = $this->leader->rankList(8);
    	$comments = $this->comment->newList(10);
    	$gallery_offers = $this->offer->listWithGallery(4);
        // dd($gallery_offers);
    	$articles = $this->article->listByTag('最新签单', 5);
    	$feng_shui = $this->article->listByTag('居家风水', 5);
    	$industry = $this->article->listByTag('行业新闻', 5);
    	$designs = $this->gallery->newDesignList(8);
        return view('frontend.index', compact('leaders', 'offers', 'comments', 'gallery_offers', 'articles', 'feng_shui', 'industry', 'designs'));
    }

    public function freesize()
    {
        return view('frontend.freesize');
    }

    public function discount()
    {
        return view('frontend.discount');
    }

    public function supervise()
    {
        return view('frontend.supervise');
    }


    public function supply()
    {
        return view('frontend.supply');
    }

    public function compensate()
    {
        return view('frontend.compensate');
    }

    public function safety()
    {
        return view('frontend.safety');
    }

}
