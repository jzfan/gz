<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = \My\User\User::whereRole('worker')->OrderBy('id', 'desc')->paginate(10);
        return view('backend.user.worker', compact('workers'));
    }
}
