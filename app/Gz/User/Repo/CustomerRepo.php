<?php

namespace Gz\User\Repo;

use Gz\User\Customer;

class CustomerRepo extends UserRepo
{
	public function count()
	{
	    return $this->user->where('role', 'customer')->count();
	}

	public function byPage($n=10)
	{
		return $this->user->with('customerApplies')->paginate($n);
	}
}