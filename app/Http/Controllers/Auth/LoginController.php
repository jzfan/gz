<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/me';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function adminLoginForm()
    {
        return view('backend.login');
    }

    public function redirectTo()
    {
        if (\Auth::user()->isAdmin()) {
            return '/admin-console';
        }
<<<<<<< HEAD
        
=======
	if (\Auth::user()->isLeader()) {
           return '/me';
	}
	return '/';
>>>>>>> e6ebf0bd93a4dd797394342698c37d30189ea3f5
    }
}
