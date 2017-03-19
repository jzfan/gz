<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditorController extends Controller
{
	public function index()
	{
	    $editors = \My\User\User::whereRole('editor')->get();
	    return view('backend.user.editor', compact('editors'));
	}
}
