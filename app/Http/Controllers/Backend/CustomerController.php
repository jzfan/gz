<?php

namespace App\Http\Controllers\Backend;

use My\User\Repo\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
	private $user;

	public function __construct(UserRepo $user)
	{
		$this->user = $user;
	}

    public function index()
    {
        $users = $this->user->roleByPage('customer');
        return view('backend.user.customer', compact('users'));
    }   
}
