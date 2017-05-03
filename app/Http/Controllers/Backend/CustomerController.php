<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Gz\User\Repo\CustomerRepo;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
	private $customer;

	public function __construct(CustomerRepo $customer)
	{
		$this->customer = $customer;
	}


    public function index()
    {
        $customers = $this->customer->byPage(6);
        return view('backend.user.customers', compact('customers'));
    }   
}
