<?php

namespace Gz\User\Repo;

use Gz\User\Admin;

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