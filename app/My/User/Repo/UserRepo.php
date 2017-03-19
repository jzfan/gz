<?php

namespace My\User\Repo;

use My\User\User;

class UserRepo
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function roleByPage($role, $n=10)
	{
		if ($role == 'customer') {
		    return $this->user->ofRole($role)->with('decorations')->paginate($n);
		}
		if ($role == 'admin' or $role == 'editor') {
		    return $this->user->ofRole($role)->get();
		}
	    return $this->user->ofRole($role)->with($role)->paginate($n);
	}
}