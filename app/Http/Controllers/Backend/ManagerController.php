<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = \My\User\User::whereRole('manager')->with('manager')->paginate(10);
        return view('backend.user.manager', compact('managers'));
    }
}
