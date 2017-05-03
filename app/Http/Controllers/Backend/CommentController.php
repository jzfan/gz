<?php

namespace App\Http\Controllers\Backend;

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
	    $comments = $this->comment->byPage(6);
	    return view('backend.page.comments', compact('comments'));
	}

	public function destroy($id)
	{
	    if ($this->comment->delete($id)) {
	    	return redirect()->back()->with('success', '删除成功！');
	    }
	    return redirect()->back()->with('error', '删除失败！');
	}

    
}
