<?php

namespace My\User\Repo;

use My\User\Admin;

class AdminRepo
{
	private $admin;

	public function __construct(Admin $admin)
	{
		$this->admin = $admin;
	}

	public function all()
	{
	    return $this->admin->all();
	}
}