<?php

namespace My\User\Repo;

use My\User\Customer;

class CustomerRepo
{
	private $customer;

	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}

	public function count()
	{
	    return $this->customer->count();
	}

	public function byPage($n=10)
	{
	    return $this->customer->with('user')->orderBy('id', 'desc')->paginate($n);
	}
}