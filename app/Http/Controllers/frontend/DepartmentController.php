<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use App\Department;
use Redirect;

use App\Traits\Authorizable;

class DepartmentController extends Controller
{
    use Authorizable;
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
        return view('frontend.department.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.department.create');
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
            'name' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);

        if($department = Department::Create($input)){
            return redirect()->route('departments.index')->with('success','Department has been created.');
        }else{
            return redirect()->route('departments.index')->with('error','Unable to create Department.');
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
        $department = Department::find($id);
        return view('frontend.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Department $department)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);
        
        if($department->update($input)){
            return redirect()->route('departments.index')->with('success','Department has been updated.');
        }else{
            return redirect()->route('departments.index')->with('error','Unable to create Department.');
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
        $department = Department::find($id);
        $department->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Department Deleted successfully."]);
        }
        return Redirect::route('departments.index')->with('success','Department delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        $ids = $request->id;
        $departments = Department::whereIn('id',$ids)->get();
        if($departments->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete Department."]);
        }
        foreach($departments as $key => $value){
            $value->delete();
        }
        return response()->json(['status' => 'success', 'msg' => "Department deleted successfully."]);
    }
    public function Status(Request $request){
        $department = Department::find($request->id);

        if(empty($department)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem change Department status."]);    
            }
            return Redirect::route('departments.index')->with('error','Some problem change Department status.');
        }
        $department->status = $request->status;
        $department->save();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Department status change successfully."]);
        }
        return Redirect::route('departments.index')->with('success','Department status change successfully.');
    }

    public function Datatable(Request $request) {
        $raw = Department::query();

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
                return '<a href="javascript:void(0)"><span class="label theme-bg3 text-white f-12 department_status active" data-url="'.route('departments.status',$raw->id).'">Active</span></a>';
            }else{
                return '<a href="javascript:void(0)"><span class="label theme-bg4 text-white f-12 department_status inactive" data-url="'.route('departments.status',$raw->id).'">Deactive</span></a>';
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_departments')){
                $html .= '<a href="'.route("departments.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_departments')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-department-btn" data-url="'. route("departments.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);
    }
}
