<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendMail;

use App\User;
use App\Permission;
use App\Role;
use App\Company;
use App\Department;
use App\JobTitle;
use App\LeaveGroup;

use DataTables;
use Response;
use Mail;
use Redirect;
use Auth;
use Hash;
use Image;
use File;

use App\Traits\Authorizable;

class UserController extends Controller
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
        return view('backend.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('guard_name', 'web')->pluck('name', 'id');

        $companies = Company::all();
        $departments = Department::all();
        $leave_groups = LeaveGroup::all();
        return view('backend.user.create', compact('roles', 'companies', 'departments', 'leave_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|unique:permissions,name,NULL,id,guard_name,admin'
        // ]);
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'employeeid' => 'required|min:3|unique:users',
            'employment_status' => 'required',
            'company_email' => 'unique:users',
            'roles' => 'required|min:1'
        ]);

        $input = $request->except(['_token']);
    
        if ($request->hasFile('profile_image')) {
            $randomSTR = randomSTR();
            $file = $request->file('profile_image');
            $file_name = $randomSTR . '.' . $file->getClientOriginalExtension();

            $MimeType = $file->getMimeType();
            $fileSize = $file->getSize();

            //originals image save
            $originalsImgPath = 'public/frontend/profile_img';
            $originalsPath = $file->storeAs($originalsImgPath, $file_name);

            // $ImgPath = public_path('/frontend/profile_img');
            // $file->move($ImgPath, $file_name);

            $input['profile_image'] = $file_name;
        }

        $input['password'] = bcrypt($request->get('password'));
        
        if($user = User::Create($input)){
            assignRoleAndPermissions($request, $user);
            $user->setAttribute('normal_password', $request->password);
            Mail::to($request->email)->send(new SendMail($user));
            return redirect()->route('admin.users.index')->with('success','User has been created.');
        }else{
            return redirect()->route('admin.users.index')->with('error','Unable to create user.');
        }
        
        
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
        $user = User::find($id);
        $roles = Role::where('guard_name', 'web')->pluck('name', 'id');
        $permissions = Permission::where('guard_name', 'web')->get('name', 'id');
        // echo '<pre>';print_r($permissions->toArray());exit;

        $companies = Company::all();
        $departments = Department::all();
        $leave_groups = LeaveGroup::all();

        return view('backend.user.edit', compact('user', 'roles', 'permissions', 'companies', 'departments', 'leave_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'employeeid' => 'required|min:3|unique:users,employeeid,'. $user->id,
            'employment_status' => 'required',
            'company_email' => 'unique:users,company_email,'. $user->id,
            'roles' => 'required|min:1'
        ]);

        $input = $request->except(['_token', 'roles', 'permissions', 'password']);
    
        if ($request->hasFile('profile_image')) {
            $randomSTR = randomSTR();
            $file = $request->file('profile_image');
            $file_name = $randomSTR . '.' . $file->getClientOriginalExtension();

            // $MimeType = $file->getMimeType();
            // $fileSize = $file->getSize();
            $originalsImgPath = 'public/frontend/profile_img';

            //delete old file
            if(File::exists($originalsImgPath.'/'.$user->profile_image)) {
                // File::delete($originalsImgPath.'/'.$user->profile_image);
                Storage::delete($originalsImgPath.'/'.$user->profile_image);
            }

            //originals image save
            $originalsPath = $file->storeAs($originalsImgPath, $file_name);
            $input['profile_image'] = $file_name;
        }

        if($request->get('password')) {
            $input['password'] = bcrypt($request->get('password'));
        }
        // echo '<pre>';print_r($request->all());exit;
        // Update user
        if($user->update($input)){
            // Handle the admin roles
            assignRoleAndPermissions($request, $user);
            $user->setAttribute('normal_password', $request->password);
            Mail::to($request->email)->send(new SendMail($user));
            return redirect()->route('admin.users.index')->with('success','User has been updated.');
        }else{
            return redirect()->route('admin.users.index')->with('error','Unable to create user.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        //if not found
        if(empty($user)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem delete user."]);    
            }
            return Redirect::route('admin.users.index')->with('error','Some problem delete user.');
        }

        //delete
        $originalsImgPath = 'public/frontend/profile_img';
        if(File::exists($originalsImgPath.'/'.$user->profile_image)) {
            // File::delete($originalsImgPath.'/'.$user->profile_image);
            Storage::delete($originalsImgPath.'/'.$user->profile_image);
        }
        $user->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "User Deleted successfully."]);
        }
        return Redirect::route('admin.users.index')->with('success','User delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        $ids = $request->id;
        $users = User::whereIn('id',$ids)->get();
        if($users->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete user."]);
        }
        $originalsImgPath = 'public/frontend/profile_img';
        foreach($users as $key => $value){
            if(File::exists($originalsImgPath.'/'.$value->profile_image)) {
                Storage::delete($originalsImgPath.'/'.$value->profile_image);
            }
            $value->delete();
        }
        // User::whereIn('id',$ids)->delete();
        return response()->json(['status' => 'success', 'msg' => "User deleted successfully."]);
    }

    public function Status(Request $request){
        $user = User::find($request->id);
        //if not found
        if(empty($user)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem change user status."]);    
            }
            return Redirect::route('admin.users.index')->with('error','Some problem change user status.');
        }

        $user->employment_status = $request->status;
        $user->save();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "User status change successfully."]);
        }
        return Redirect::route('admin.users.index')->with('success','User status change successfully.');

    }

    public function Datatable(Request $request) {
        // $raw = Admin::query();
        $raw = User::with('roles')->get();
        // $raw = $users->reject(function ($user, $key) {
        //     return $user->hasRole('admin');
        // });
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
        ->addColumn('fullname', function ($raw) {
            if($raw->firstname == null || $raw->lastname == ''){
                return '-';
            }else{
                return $raw->firstname .' '. $raw->latname;
            }
        })
        ->addColumn('role', function ($raw) {
            // return removeDash($raw->roles->first()->name);
            // return ArrayToString($raw->getRoleNames()->toArray());
            return $raw->getRoleNames()->toArray();
        })
        ->editColumn('status', function ($raw) {
            if($raw->employment_status == 1){
                return '<a href="javascript:void(0)"><span class="label theme-bg3 text-white f-12 user_status active" data-url="'.route('admin.users.status',['id' => $raw->id]).'">Active</span></a>';
            }else{
                return '<a href="javascript:void(0)"><span class="label theme-bg4 text-white f-12 user_status inactive" data-url="'.route('admin.users.status',['id' => $raw->id]).'">Deactive</span></a>';
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_users')){
                $html .= '<a href="'.route("admin.users.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_users')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-user-btn" data-url="'. route("admin.users.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);

    }
}
