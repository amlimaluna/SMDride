<?php

namespace SMDRide\Http\Controllers\Auth;

use SMDRide\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    /*
    | Login Controller
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo = '/rides';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	
	/*Override the username method used to validate login
    *
    * @return string
    */
    public function username()
    {
        return 'username';
    }
	
}