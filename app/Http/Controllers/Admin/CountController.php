<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Applied;
use App\Bookmark;
use App\Employer;
use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CountController extends Controller
{
    //
    public function  count(){

/**all user */
        $id = "";
        $total_users =  "";
        $users_total = User::all();
        if($users_total  != "") $total_users = count($users_total );
       // dd( $total_users);
       /**end all user */
/**all employers */
        $id = "";
        $total_employers =  "";
        $users_num = auth::user()->usertype;
        $employers = DB::select('select * from users where usertype = 2' , ['employers' => $users_num]);
        
        if($employers != "") $total_employers = count($employers);
        //dd($total_employers);
       /**end all employers */
        
       /**all employees*/
        if($employers != "") $total_employers = count($employers);
        $total_employees =  "";
        $users_num = auth::user()->usertype;
        $employees = DB::select('select * from users where usertype = 3' , ['employees' => $users_num]);
         if($employees != "") $total_employees = count($employees);
        
         /**end all employees */

         /**all jobs */
        $total_jobs =  "";
        $job_num = Job::all();
        if($job_num != "") $total_jobs = count($job_num);
         /**end all job */


         /**all applied job */
        $total_appliedjobs =  "";
        $applied_num = Applied::all();
        if($applied_num != "") $total_appliedjobs = count($applied_num);
        /** end all applied job */

        /**all bookmarks job */
        $total_bookmark =  "";
        $bookmark_num = Bookmark::all();
        if($bookmark_num != "") $total_bookmark = count($bookmark_num);
        /**end all bookmarks job */
        return view('admin/dashboard')->with("total_employers",$total_employers)->with("total_employees",$total_employees)->with('total_appliedjobs',$total_appliedjobs)->with("total_jobs",$total_jobs)->with("total_bookmark",$total_bookmark)->with("total_users",$total_users);
    }
}
