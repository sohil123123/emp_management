<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

class LeaveGroupController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['password.confirm']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.leave_group.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.leave_group.create');
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
            'name' => 'required|unique:leave_groups',
            'description' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);

        if(LeaveGroup::Create($input)){
            return redirect()->route('leave-groups.index')->with('success','LeaveGroup has been created.');
        }else{
            return redirect()->route('leave-groups.index')->with('error','Unable to create LeaveGroup.');
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
        $leave_group = LeaveGroup::find($id);
        return view('frontend.leave_group.edit', compact('leave_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveGroup $leave_group)
    {
        $this->validate($request, [
            'name' => 'required|unique:leave_groups,name,' . $leave_group->id,
            'description' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);
        
        if($leave_group->update($input)){
            return redirect()->route('leave-groups.index')->with('success','LeaveGroup has been updated.');
        }else{
            return redirect()->route('leave-groups.index')->with('error','Unable to create LeaveGroup.');
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
        $leave_group = LeaveGroup::find($id);
        $leave_group->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "LeaveGroup Deleted successfully."]);
        }
        return Redirect::route('leave-groups.index')->with('success','LeaveGroup delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        // echo 'sss';exit;
        $ids = $request->id;
        $leave_groups = LeaveGroup::whereIn('id',$ids)->get();
        if($leave_groups->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete LeaveGroup."]);
        }
        foreach($leave_groups as $key => $value){
            $value->delete();
        }
        return response()->json(['status' => 'success', 'msg' => "LeaveGroup deleted successfully."]);
    }

    public function Status(Request $request){
        $leave_group = LeaveGroup::find($request->id);

        if(empty($leave_group)){
            if ($leave_group->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem change LeaveGroup status."]);    
            }
            return Redirect::route('leave-groups.index')->with('error','Some problem change LeaveGroup status.');
        }
        $leave_group->status = $request->status;
        $leave_group->save();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "LeaveGroup status change successfully."]);
        }
        return Redirect::route('leave-groups.index')->with('success','LeaveGroup status change successfully.');
    }


    public function Datatable(Request $request) {
        $raw = LeaveGroup::query();

        $datatable = app('datatables')->of($raw)
        ->editColumn('created_at', function ($raw) {
            if($raw->created_at == null || $raw->created_at == ''){
                return '-';
            }else{
                return date('Y-m-d H:i:s A', strtotime($raw->created_at));
            }
        })
        ->editColumn('status', function ($raw) {
            if($raw->status == 1){
                return '<a href="javascript:void(0)"><span class="label theme-bg3 text-white f-12 leave_group_status active" data-url="'.route('leave-groups.status', $raw->id).'">Active</span></a>';
            }else{
                return '<a href="javascript:void(0)"><span class="label theme-bg4 text-white f-12 leave_group_status inactive" data-url="'.route('leave-groups.status', $raw->id).'">Deactive</span></a>';
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_leave-groups')){
                $html .= '<a href="'.route("leave-groups.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_leave-groups')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-leave_group-btn" data-url="'. route("leave-groups.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);
    }
    
}
