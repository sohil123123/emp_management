<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use App\Company;
use Redirect;

class CompanyController extends Controller
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
        return view('frontend.company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.company.create');
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

        if($company = Company::Create($input)){
            return redirect()->route('companies.index')->with('success','Company has been created.');
        }else{
            return redirect()->route('companies.index')->with('error','Unable to create Company.');
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
        $company = Company::find($id);
        return view('frontend.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {

        $this->validate($request, [
            'name' => 'required',
            'status' => 'required'
        ]);

        $input = $request->except(['_token']);
        
        if($company->update($input)){
            return redirect()->route('companies.index')->with('success','Company has been updated.');
        }else{
            return redirect()->route('companies.index')->with('error','Unable to create company.');
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
        $company = Company::find($id);
        $company->delete();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Company Deleted successfully."]);
        }
        return Redirect::route('companies.index')->with('success','Company delete successfully.');
    }

    public function BulkRemove(Request $request)
    {
        $ids = $request->id;
        $companies = Company::whereIn('id',$ids)->get();
        if($companies->isEmpty()){
            return response()->json(['status' => 'error', 'msg' => "Some problem delete company."]);
        }
        foreach($companies as $key => $value){
            $value->delete();
        }
        return response()->json(['status' => 'success', 'msg' => "Company deleted successfully."]);
    }
    
    public function Status(Request $request){
        $company = Company::find($request->id);

        if(empty($company)){
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'msg' => "Some problem change company status."]);    
            }
            return Redirect::route('companies.index')->with('error','Some problem change company status.');
        }
        $company->status = $request->status;
        $company->save();
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'msg' => "Company status change successfully."]);
        }
        return Redirect::route('companies.index')->with('success','Company status change successfully.');
    }

    public function Datatable(Request $request) {
        $raw = Company::with('roles')->get();

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
                return '<a href="javascript:void(0)"><span class="label theme-bg3 text-white f-12 company_status active" data-url="'.route('companies.status', $raw->id).'">Active</span></a>';
            }else{
                return '<a href="javascript:void(0)"><span class="label theme-bg4 text-white f-12 company_status inactive" data-url="'.route('companies.status', $raw->id).'">Deactive</span></a>';
            }
        })
        ->addColumn('action', function ($raw) {
            $html = '';
            if(auth()->user()->can('edit_companies')){
                $html .= '<a href="'.route("companies.edit", $raw->id).'" class="label theme-bg2 text-white f-12">Edit</a>';
            }
            if(auth()->user()->can('delete_companies')){
                $html .= '<a href="javascript:void(0)" class="label theme-bg text-white f-12 delete-company-btn" data-url="'. route("companies.destroy", $raw->id) .'">Delete</a>';
            }
            return $html;
        });
        return $datatable->make(true);
    }
    
}
