<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Applied;
use App\Bookmark;

use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AppliedController extends Controller
{
    

    public function applied($id)
    {
        
        $user_id = Auth::user()->id;
        
        //$job_id = Appliedjob::where('job_id',);
        //dd($job_id);
        /*
        $employ = Appliedjob::where('employee_id',$user )->get();
        $employee_id = Appliedjob::where('employee_id');
        */
       // echo " empl = $user_id....jobid = $id";
        $employ = DB::select('select * from applieds where employee_id = :employee_id AND job_id = :job_id' , ['employee_id' => $user_id,'job_id' => $id]);
       

        if(is_array($employ) && !empty($employ))
        //dd($employ);
        {
           return redirect('/job_index')->with('error','Sorry, You can only Apply once!');
        }
        //dd($id);
        $user_id = Auth::user()->id;
        //$employee = Appliedjob::where('job_id',$job)->get();
        $apply = new Applied;
        $apply->job_id = $id;
        $apply->employee_id = $user_id;
        //dd($apply);
        
        $apply->save();
        return redirect('/job_index')->with('success', 'Congrats, you just applied for a job');
    }

    public function show($id)
    {
        
        //$user_id = Auth::user()->id;
        $viewappliedjobs  = array();
        $applied_jobs = Applied::where('employee_id',$id)->get();
      
        for($i = 0 ; $i < count($applied_jobs);  $i++){

            $job_id = $applied_jobs[$i]->job_id;
            $viewapplied = job::where('id',$job_id)->get();
            array_push($viewappliedjobs, $viewapplied);
        }

        

        $employees = Employee::where('user_id',$id)->get();
        //dd($employees);

        $total_jobs =  "";
        $applied_num = Applied::where('employee_id',$id)->get();
        if($applied_num != "") $total_jobs = count($applied_num);

        $total_favorites =  "";
        $bookmarked_num = Bookmark::where('employee_id',$id)->get();
        if($bookmarked_num != "") $total_favorites = count($bookmarked_num);
        //dd($post);
        return view('employee/appliedjob')->with('employees',$employees)->with('viewappliedjobs',$viewappliedjobs)->with("total_jobs",$total_jobs)->with("total_favorites",$total_favorites);
    }

}
