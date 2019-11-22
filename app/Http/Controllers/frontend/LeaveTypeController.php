<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\LeaveType;
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

class LeaveTypeController extends Controller
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
        return view('frontend.leave_type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leave_groups = LeaveGroup::Active()->pluck('name','id');
        // echo '<pre>';print_r($leave_groups);exit;
        return view('frontend.leave_type.create', compact('leave_groups'));
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
            'name' => 'required|unique:leave_types',
            'description' => 'required',
            'status' => 'required',
            'leave_group_ids' => 'required|min:1'
        ]);

        // echo '<pre>';print_r($request->all());exit;

        $input = $request->except(['_token']);

        if($leave_type = LeaveType::Create($input)){
            $leave_type->leave_groups()->attach($request->leave_group_ids);
            return redirect()->route('leave-types.index')->with('success','LeaveType has been created.');
        }else{
            return redirect()->route('leave-types.index')->with('error','LeaveType to create LeaveGroup.');
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
        $leave_type = LeaveType::find($id);
        $leave_groups = LeaveGroup::Active()->pluck('name','id');
        // echo '<pre>';print_r($leave_type->getGroupNames());exit;
        return view('frontend.leave_type.edit', compact('leave_type', 'leave_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveType $leave_type)
    {
        $this->validate($request, [
            'name' => 'required|unique:leave_types,name,' . $leave_type->id,
            'description' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);
        
        if($leave_type->update($input)){
            $leave_type->leave_groups()->sync($request->leave_group_ids);
            return redirect()->route('leave-types.index')->with('success','LeaveType has been updated.');
        }else{
            return redirect()->route('leave-types.index')->with('error','Unable to create LeaveType.');
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
        $leave_type = LeaveType::find($id);
        $leave_type->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "LeaveType Deleted successfully."]);
        }
        return Redirect::route('leave-groups.index')->with('success','LeaveType delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        // echo 'sss';exit;
        $ids = $request->id;
        $leave_types = LeaveType::whereIn('id',$ids)->get();
        if($leave_types->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete LeaveType."]);
        }
        foreach($leave_types as $key => $value){
            $value->delete();
        }
        return response()->json(['status' => 'success', 'msg' => "LeaveType deleted successfully."]);
    }

    public function Status(Request $request){
        $leave_type = LeaveType::find($request->id);

        if(empty($leave_type)){
            if ($leave_type->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem change LeaveType status."]);    
            }
            return Redirect::route('leave-types.index')->with('error','Some problem change LeaveType status.');
        }
        $leave_type->status = $request->status;
        $leave_type->save();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "LeaveType status change successfully."]);
        }
        return Redirect::route('leave-types.index')->with('success','LeaveType status change successfully.');
    }


    public function Datatable(Request $request) {
        $raw = LeaveType::query();

        $datatable = app('datatables')->of($raw)
        ->editColumn('created_at', function ($raw) {
            if($raw->created_at == null || $raw->created_at == ''){
                return '-';
            }else{
                return date('Y-m-d H:i:s A', strtotime($raw->created_at));
            }
        })
        ->addColumn('group_name', function ($raw) {
            // return removeDash($raw->roles->first()->name);
            return ArrayToString($raw->getGroupNames()->toArray());
            // return $raw->getGroupNames()->toArray();
        })
        ->editColumn('status', function ($raw) {
            if($raw->status == 1){
                return '<a href="javascript:void(0)"><span class="label theme-bg3 text-white f-12 leave_type_status active" data-url="'.route('leave-types.status', $raw->id).'">Active</span></a>';
            }else{
                return '<a href="javascript:void(0)"><span class="label theme-bg4 text-white f-12 leave_type_status inactive" data-url="'.route('leave-types.status', $raw->id).'">Deactive</span></a>';
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_leave-types')){
                $html .= '<a href="'.route("leave-types.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_leave-types')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-leave_type-btn" data-url="'. route("leave-types.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);
    }
}
