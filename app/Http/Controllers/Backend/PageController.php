<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard()
    {
    	$customers_count = \My\User\User::whereRole('customer')->count();
    	return view('backend.dashboard', compact('customers_count'));
    }
}
