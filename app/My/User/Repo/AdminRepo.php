<?php

namespace My\User\Repo;

use My\User\Admin;

class AdminRepo extends UserRepo
{
	public function setRole($phone, $role)
	{
	    return $this->user->where('phone', $phone)->update(['role' => $role]);
	}

	public function backendUsers()
	{
	    return $this->user->whereIn('role', ['admin', 'editor'])->get();
	}
}