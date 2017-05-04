<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
	private $comment;
    protected $leader;

	public function __construct(CommentRepo $comment, LeaderRepo $leader)
	{
		$this->comment = $comment;
        $this->middleware('auth')->only('store');
        $this->leader = $leader;
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

    public function likeName()
    {
        $this->validate(request(), [
                'name' => 'required'
            ]);
        $user = \Gz\User\User::where('role', 'leader')->where('name', 'like', '%'.request('name').'%')->first();
        if ($user === null) {
            return redirect()->back();
        }
        $comments = $user->comments()->paginate(4);
        $points_list = $this->leader->latestBy('points', 6); 
        return view('frontend.user.gz-comments', compact('user', 'comments', 'points_list'));
    }

    public function store()
    {
        $this->validate(request(), [
                'content' => 'required|min:6'
            ]);
        $leader = \Gz\User\User::findOrFail(request('id'));
        $leader->comments()->create([
                'user_id' => \Auth::user()->id,
                'content' => request('content')
            ]);
        return redirect()->back();
    }
}
