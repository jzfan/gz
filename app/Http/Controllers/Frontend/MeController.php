<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\UserRepo;
use Illuminate\Http\Request;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;

class MeController extends Controller
{
    public function homeByRole()
    {
        switch (\Auth::user()->role) {
            case 'leader':
                return $this->homeOfLeader();
            default:
                break;
        }
    }

    protected function homeOfLeader()
    {
        $comments = \Auth::user()->comments()->latest()->take(10)->get();;
        $constructions = \Auth::user()->offers()->whereNotNull('accepted_at')->whereNull('done_at')->latest()->take(10)->get();
        $all = \Auth::user()->offers()->latest()->take(20)->get();
        return view('frontend.home.leader', compact('comments', 'constructions', 'all'));
    }

    public function update()
    {
        $this->validate(request(), [
        		'phone' => 'unique:users,phone,'.\Auth::user()->id,
        		'name' => 'required|string|min:2|max:60',
        	]);
        \Auth::user()->update(request()->input());
        $leader = \Auth::user()->leader;
        $leader->update(request()->input());
        return redirect()->back();
    }

    public function resetPassword()
    {
        $this->validate(request(), [
                'password' => 'required|min:6|max:60',
                'new' => 'required|confirmed'
            ]);
        if (password_verify(request('password'), \Auth::user()->password)) {
            \Auth::user()->forceFill([
                'password' => bcrypt(request('new')),
                'remember_token' => str_random(60),
            ])->save();
            return redirect()->back();
        }
        throw new \Illuminate\Auth\AuthenticationException;
        
    }
}
