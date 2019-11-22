<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', 'verified', 'password.confirm']);
        $this->middleware(['password.confirm']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    //    echo '<pre>'; print_r(Auth::user()->getAllPermissions()->toArray());exit;
        // $users = User::All();
        // echo '<pre>';print_r($users);exit;
        return view('frontend.home');
    }

}
