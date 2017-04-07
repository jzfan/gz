<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use My\User\Repo\CustomerRepo;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
	private $customer;

	public function __construct(CustomerRepo $customer)
	{
		$this->customer = $customer;
	}

    public function store()
    {
        $this->validate(request(), [
        		'phone' => 'required|integer|between:13000000000,19000000000|unique:users',
        		'name' => 'required|min:2,max:30',
        		'password' => 'required|min:6|confirmed'
        	]);
        $customer = $this->customer->create(request(['phone', 'name', 'password']));
        return response()->json(['data' => $customer, 'code' => 201]);
    }
}
