<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeController extends Controller
{
    public function profile()
    {
        return \Auth::user();
    }

    public function update()
    {
        $this->validate(request(), [
        		'phone' => 'unique:users,phone,'.\Auth::user()->id,
        		'name' => 'required|string|min:2|max:60',
        		'qq' => 'integer',
        		'email' => 'email|unique:users,email,' .\Auth::user()->id
        	]);
        \Auth::user()->update(request()->input());
        return 'ok';
    }
}
