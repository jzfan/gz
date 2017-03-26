<?php

namespace App\Http\Controllers\Backend;

use My\User\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    private $admin;

    public function __construct(AdminRepo $admin)
    {
        $this->admin = $admin;
    }


    public function index()
    {
        $admins = $this->admin->all();
        return view('backend.user.admins', compact('admins'));
    }
}
