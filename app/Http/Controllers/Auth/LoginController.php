<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Auth;
use Redirect;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->mobileno = $this->findMobileno();
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    protected function credentials(Request $request)
    {
        // return [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        //     'employment_status' => '1'
        // ];
        // echo $this->username();exit;
        return array_merge($request->only($this->mobileno(), 'password'), ['employment_status' => '1']);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findMobileno()
    {
        $login = request()->input('email');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobileno';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function mobileno()
    {
        return $this->mobileno;
    }

    public function logout(Request $request)
    {   
        Auth::guard('web')->logout();
        return Redirect::back ();
    }
}
