<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
    	$admins = \My\User\User::whereRole('admin')->get();
        return view('backend.user.admin', compact('admins'));
    }
}
