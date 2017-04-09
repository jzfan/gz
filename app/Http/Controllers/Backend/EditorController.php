<?php

namespace App\Http\Controllers\Backend;

use Gz\User\Repo\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditorController extends Controller
{
	private $user;

	public function __construct(UserRepo $user)
	{
		$this->user = $user;
	}

    public function index()
    {
        $users = $this->user->roleByPage('editor');
        return view('backend.user.editor', compact('users'));
    }
}
