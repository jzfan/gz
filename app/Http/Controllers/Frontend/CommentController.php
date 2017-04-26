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
        $rands = $this->comment->getRandom(6);
        return view('frontend.comments.index', compact('comments', 'rands'));
    }

    public function ofLeader($leader_id)
    {
    	$leader = \Gz\User\User::findOrFail($leader_id);
        $comments = $leader->comments()->paginate(6);
        return view('frontend.comments.leader', compact('comments', 'leader'));
    }
}
