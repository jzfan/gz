<?php

namespace My\User\Repo;

use My\User\Customer;

class CustomerRepo extends UserRepo
{
	public function count()
	{
	    return $this->user->where('role', 'customer')->count();
	}

	public function byPage($n=10)
	{
		return $this->user->has('customerApplies')->with('customerApplies')->latest()->paginate($n);
	}
}