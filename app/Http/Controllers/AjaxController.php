<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobTitle;

class AjaxController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth:admin');
    // }

    public function getJobtitle(Request $request)
    {
        $department_id = $request->department_id;
        $department = JobTitle::where('department_id',$department_id)->get();
        $html = '';
        if(!$department->isEmpty()){
            foreach($department as $key => $value){
                $html .= '<option value='.$value->id.'>'.$value->name.'</option>';
            }
            return response()->json(['status' => 'success', 'html' => $html]);
        }else{
            return response()->json(['status' => 'error', 'html' => '']);    
        }
        
        
    }
}
