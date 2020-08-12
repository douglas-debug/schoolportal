<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class DynamicPDFController extends Controller
{
    public function index(){
$user_id =Auth::user()->id;
$employees =Employee::where('user_id',$user_id)->get();
 return view('dynamic_pdf')->with('$employee_data',$employee_data);
   
}

public function get_employee_data()
{
$employee_data = DB::table('employees')
                ->limit(10)
                ->get();
                return $employee_data;
                
}



}
