<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Permission;
use App\Role;

use DataTables;
use Response;
use Mail;
use Excel;
use Redirect;
use Image;
use File;
use Storage;
use Validator;
use DB;

use App\Traits\Authorizable;

class FrontendPermissionController extends Controller
{
    use Authorizable;
    
    public function __construct() {
        $this->middleware('auth:admin');
        //$this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.frontend_permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.frontend_permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required|unique:permissions',
            'name' => 'required|unique:permissions,name,NULL,id,guard_name,web'
        ]);

        //add new permission
        Permission::firstOrCreate(['name' => $request->name, 'guard_name' => 'web']);
        //give permission to admin role
        // $role = Role::where('name', 'admin')->first();
        // $role->givePermissionTo($request->name);

        return Redirect::route('admin.frontend-permissions.index')->with('success','Permission create successfully.');
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
        $permission = Permission::find($id);
        return view('backend.frontend_permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permission = permission::find($id);
        $this->validate($request, [
            // 'name' => 'required|unique:permissions,name,'.$permission->id,
            'name' => 'required|unique:permissions,name,'.$permission->id.',id,guard_name,web'
        ]);

        $input = $request->except(['_token','_method']);
        $permission->update($input);
        return Redirect::route('admin.frontend-permissions.index')->with('success','Permission update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $permission = Permission::find($id);
        //if not found
        if(empty($permission)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem delete permission."]);    
            }
            return Redirect::route('admin.frontend-permissions.index')->with('error','Some problem delete permission.');
        }

        //delete
        $permission->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Permission Deleted successfully."]);
        }
        return Redirect::route('admin.frontend-permissions.index')->with('success','Permission delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        $ids = $request->id;
        $permissions = Permission::whereIn('id',$ids)->get();
        if($permissions->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete permission."]);
        }
        // echo '<pre>';print_r($permissions);exit;
        Permission::whereIn('id',$ids)->delete();
        return response()->json(['status' => 'success', 'msg' => "Permission deleted successfully."]);
    }

    public function Datatable(Request $request) {
        $raw = Permission::query();
        $raw->where('guard_name', 'web');

        $datatable = app('datatables')->of($raw)
        ->editColumn('created_at', function ($raw) {
            if($raw->created_at == ''){
                return '-';
            }else{
                return date('Y-m-d H:i:s A', strtotime($raw->created_at));
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_frontend-permissions')){
                $html .= '<a href="'.route("admin.frontend-permissions.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_backend-permissions')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-frontend-permission-btn" data-url="'. route("admin.frontend-permissions.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);

    }
}
