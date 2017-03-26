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

}