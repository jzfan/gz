<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
	private $comment;

	public function __construct(CommentRepo $comment)
	{
		$this->comment = $comment;
	}

    public function index()
    {
        $comments = $this->comment->byPage(10);
        return view('frontend.comments', compact('comments'));
    }
}
