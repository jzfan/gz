<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\UserRepo;
use Illuminate\Http\Request;
use Gz\Article\Repo\ArticleRepo;
use Gz\Article\Repo\CommentRepo;
use App\Http\Controllers\Controller;

class MeController extends Controller
{
    protected $article;


    public function __construct(ArticleRepo $article)
    {
        $this->middleware('auth')->only('homeByRole');
        $this->article = $article;
    }

    public function homeByRole()
    {
        switch (\Auth::user()->role) {
            case 'leader':
                return $this->homeOfLeader();
            case 'customer':
                return $this->homeOfCustomer();
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

    protected function homeOfCustomer()
    {
        $hots = $this->article->newList(5);
        $rand_tag_list = $this->article->byRandTag(5);
        return view('frontend.home.customer', compact('hots', 'rand_tag_list'));
    }

    public function update()
    {
        $this->validate(request(), [
                'phone' => 'unique:users,phone,'.\Auth::user()->id,
                'name' => 'string|min:2|max:60',
                'password' => 'confirmed',
                'avatar' => 'image'
            ]);
        // dd(request()->all());
        $input = request()->input();
        if (request()->hasFile('avatar')) {
            $input['avatar'] = '/' . str_replace('public', 'storage', request('avatar')->store('public/avatar'));
        }
        \Auth::user()->update($input);
        if (\Auth::user()->role === 'leader') {
            $leader = \Auth::user()->leader;
            $leader->update($input);
        }
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
