<?php

namespace Gz\User\Repo;

use Carbon\Carbon;
use Gz\User\Customer;

class CustomerRepo extends UserRepo
{
	public function newCountB4Days($b4Days)
	{
	    return $this->user->where('role', 'customer')->where('created_at', '>', Carbon::now()->subDays($b4Days))->count();
	}

	public function byPage($n=10)
	{
		return $this->user->with('customerApplies')->paginate($n);
	}
}