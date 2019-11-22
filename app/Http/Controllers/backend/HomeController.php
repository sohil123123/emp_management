<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Admin;
use App\Permission;
use App\Role;

use Carbon\Carbon;

use App\Traits\Authorizable;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
        // $this->middleware('admin');
    }

    public function index(){
    	$user = User::all()->count();
    	$admin = Admin::all()->count();
    	$backend_permission = Permission::where('guard_name','admin')->count();
    	$frontend_permission = Permission::where('guard_name','web')->count();
    	$backend_role = Role::where('guard_name','admin')->count();
    	$frontend_role = Role::where('guard_name','web')->count();
    	return view('backend.home', compact('user', 'admin', 'backend_permission', 'frontend_permission', 'backend_role', 'frontend_role'));
    }
}
