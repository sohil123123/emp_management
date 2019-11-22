<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use App\JobTitle;
use App\Department;
use Redirect;

use App\Traits\Authorizable;

class JobTitleController extends Controller
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
        return view('frontend.job_title.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('frontend.job_title.create', compact('departments'));
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
            'department_id' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);

        if($job_title = JobTitle::Create($input)){
            return redirect()->route('job-titles.index')->with('success','Job Title has been created.');
        }else{
            return redirect()->route('job-titles.index')->with('error','Unable to create Job Title.');
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
        $job_title = JobTitle::find($id);
        $departments = Department::all();
        return view('frontend.job_title.edit', compact('job_title','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobTitle $job_title)
    {
        $this->validate($request, [
            'name' => 'required',
            'department_id' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);
        
        if($job_title->update($input)){
            return redirect()->route('job-titles.index')->with('success','Job Title has been updated.');
        }else{
            return redirect()->route('job-titles.index')->with('error','Unable to create Job Title.');
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
        $job_title = JobTitle::find($id);
        $job_title->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Job Title Deleted successfully."]);
        }
        return Redirect::route('job-titles.index')->with('success','Job Title delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        $ids = $request->id;
        $job_title = JobTitle::whereIn('id',$ids)->get();
        if($job_title->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete Job Title."]);
        }
        foreach($job_title as $key => $value){
            $value->delete();
        }
        return response()->json(['status' => 'success', 'msg' => "Job Title deleted successfully."]);
    }

    public function Status(Request $request){
        $job_title = JobTitle::find($request->id);

        if(empty($job_title)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem change Job Title status."]);    
            }
            return Redirect::route('job-titles.index')->with('error','Some problem change Job Title status.');
        }
        $job_title->status = $request->status;
        $job_title->save();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Job Title status change successfully."]);
        }
        return Redirect::route('job-titles.index')->with('success','Job Title status change successfully.');
    }

    public function Datatable(Request $request) {
        $raw = JobTitle::with(['department'])->get();

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
                return '<a href="javascript:void(0)"><span class="label theme-bg3 text-white f-12 job_title_status active" data-url="'.route('job-titles.status',$raw->id).'">Active</span></a>';
            }else{
                return '<a href="javascript:void(0)"><span class="label theme-bg4 text-white f-12 job_title_status inactive" data-url="'.route('job-titles.status',$raw->id).'">Deactive</span></a>';
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_job-titles')){
                $html .= '<a href="'.route("job-titles.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_job-titles')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-job-title-btn" data-url="'. route("job-titles.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);
    }
}
