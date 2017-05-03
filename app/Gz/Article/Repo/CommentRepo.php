<?php

namespace Gz\Article\Repo;

use Gz\Article\Comment;

class CommentRepo
{
	private $comment;

	public function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}

	public function newList($n)
	{
	    return $this->comment->with('user')->orderBy('id', 'desc')->take($n)->get();
	}

	public function byPage($n=10)
	{
	    return $this->comment->with('user')->orderBy('id', 'desc')->paginate($n);
	}

	public function getRandom($n)
	{
	    return $this->comment->inRandomOrder()->take(6)->get();
	}

	public function createByUer($user, $content)
	{
		
	}

	public function delete($id)
	{
	    return $this->comment->destroy($id);
	}
}