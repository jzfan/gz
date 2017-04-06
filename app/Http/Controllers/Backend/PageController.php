<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use My\User\Repo\CustomerRepo;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	private $customer;

	public function __construct(CustomerRepo $customer)
	{
		$this->customer = $customer;
	}

    public function dashboard()
    {
    	$customers_count = $this->customer->count();
    	return view('backend.console.dashboard', compact('customers_count'));
    }

    public function editorConsole()
    {
    	$customers_count = $this->customer->count();
    	return view('backend.console.editor', compact('customers_count'));
    }
}
