<?php

namespace App\Http\Controllers\Backend;

use My\User\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    private $user;

    public function __construct(AdminRepo $user)
    {
        $this->user = $user;
    }

    public function backendUsers()
    {
        $backendUsers = $this->user->backendUsers();
        return view('backend.user.backend-users', compact('backendUsers'));
    }

    public function setRole()
    {
        $this->validate(request(), [
                'phone' => 'required|integer|between:13000000000,18999999999|exists:users,phone,role,customer',
                'role' => 'required|in:editor,admin'
            ]);
        $this->user->setRole(request('phone'), request('role'));
        return redirect()->back();
    }
}
