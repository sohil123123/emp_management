<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin;
use App\Permission;
use App\Role;

use DataTables;
use Response;
use Mail;
use Redirect;
use Auth;
use Hash;
use Image;

use App\Traits\Authorizable;

class AdminController extends Controller
{
    use Authorizable;

    public function __construct() {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('guard_name', 'admin')->pluck('name', 'id');
        return view('backend.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'strrrr';exit;
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
            'roles' => 'required|min:1'
        ]);

        // echo '<pre>';print_r($request->all());exit;

        // hash password
        $request->merge(['password' => bcrypt($request->get('password'))]);

        // Create the admin
        if ( $admin = Admin::create($request->except('roles', 'permissions')) ) {

            assignRoleAndPermissions($request, $admin);

            return redirect()->route('admin.admins.index')->with('success','Admin has been created.');

        } else {
            return redirect()->route('admin.admins.index')->with('error','Unable to create admin.');
        }

        return redirect()->route('admin.admins.index')->with('error','Unable to create admin.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        $roles = Role::where('guard_name', 'admin')->pluck('name', 'id');
        // $permissions = Permission::all('name', 'id');
        $permissions = Permission::where('guard_name', 'admin')->get('name', 'id');

        return view('backend.admin.edit', compact('admin', 'roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $this->validate($request, [
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'roles' => 'required|min:1'
        ]);

        // Update admin
        $admin->fill($request->except('roles', 'permissions', 'password'));

        // echo '<pre>';
        // print_r($admin->toArray());
        // exit;

        // check for password change
        if($request->get('password')) {
            $admin->password = bcrypt($request->get('password'));
        }

        // Handle the admin roles
        assignRoleAndPermissions($request, $admin);

        $admin->save();

        return redirect()->route('admin.admins.index')->with('success','Admin has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $admin = Admin::find($id);
        //if not found
        if(empty($admin)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem delete admin."]);    
            }
            return Redirect::route('admin.admins.index')->with('error','Some problem delete admin.');
        }

        //delete
        $admin->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Admin Deleted successfully."]);
        }
        return Redirect::route('admin.admins.index')->with('success','Admin delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        $ids = $request->id;
        // echo '<pre>';print_r($ids);exit;
        $admins = Admin::whereIn('id',$ids)->get();
        if($admins->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete admin."]);
        }
        Admin::whereIn('id',$ids)->delete();
        return response()->json(['status' => 'success', 'msg' => "Admin deleted successfully."]);
    }

    public function Datatable(Request $request) {
        // $raw = Admin::query();
        $raw = Admin::with('roles')->get();
        $raw = $raw->reject(function ($raw, $key) {
            return $raw->hasRole('admin');
        });
        $datatable = app('datatables')->of($raw)
        ->editColumn('created_at', function ($raw) {
            if($raw->created_at == null || $raw->created_at == ''){
                return '-';
            }else{
                // return date('Y/m/d', strtotime($raw->created_at->toFormattedDateString()));
                // return $raw->created_at->toFormattedDateString();
                return date('Y-m-d H:i:s A', strtotime($raw->created_at));
            }
        })
        ->addColumn('role', function ($raw) {
            // return removeDash($raw->roles->first()->name);
            return ArrayToString($raw->getRoleNames()->toArray());
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if($raw->roles->first()->name == 'Admin' || $raw->roles->first()->name == 'admin'){
                $html .= '-';
            }else{
                if(auth()->user()->can('edit_admins')){
                    $html .= '<a href="'.route("admin.admins.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
                }
                if(auth()->user()->can('delete_admins')){
                    $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-admin-btn" data-url="'. route("admin.admins.destroy", $raw->id) .'">Delete</a>';
                }
            }
            return $html;
        });
        return $datatable->make(true);

    }



}
