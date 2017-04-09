<?php

namespace Gz\User\Repo;

use Gz\User\User;

class UserRepo
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function create($data)
	{
	    return $this->user->create($data);
	}

}