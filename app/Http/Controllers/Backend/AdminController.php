<?php

namespace App\Http\Controllers\Backend;

use My\User\Repo\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	private $user;

	public function __construct(UserRepo $user)
	{
		$this->user = $user;
	}

    public function index()
    {
        $admins = $this->user->roleByPage('admin');
        $editors = $this->user->roleByPage('editor');
        $users = $admins->merge($editors);
        return view('backend.user.admin', compact('users'));
    }
}
