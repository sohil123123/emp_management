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

class FrontendRoleController extends Controller
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
        $roles = Role::where('guard_name', 'web')->get();
        $permissions = Permission::where('guard_name', 'web')->get();

        return view('backend.frontend_role.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.frontend_role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, ['name' => 'required|unique:roles']);
        $this->validate($request, [
            'name' => 'required|unique:roles,name,NULL,id,guard_name,web'
        ]);

        $input = $request->except('method');
        $input['guard_name'] = 'web';

        if( Role::create($input) ) {
            return redirect()->route('admin.frontend-roles.index')->with('success','Role added successfully.');
        }

        return redirect()->back()->with('error','Unable to add role.');
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
        //
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
        $role = Role::findOrFail($id);
        // $this->validate($request, [
        //     'name' => 'required|unique:roles,name,'.$role->id.',id,guard_name,web'
        // ]);
        if(!empty($role)) {
            // admin role has everything
            if($role->name === 'Admin' || $role->name === 'admin') {
                $role->syncPermissions(Permission::all());
                return redirect()->route('admin.frontend-roles.index');
            }

            $permissions = $request->get('permissions', []);
            $role->syncPermissions($permissions);

            return redirect()->route('admin.frontend-roles.index')->with('success', removeDash($role->name) . ' permissions has been updated');
        } else {
            return redirect()->route('admin.frontend-roles.index')->with('error', 'Role with id '. $id .' note found.');
        }

        return redirect()->route('admin.frontend-roles.index')->with('error', 'Some Problem for update permissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
