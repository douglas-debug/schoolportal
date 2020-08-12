<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Bookmark;
use App\Applied;
use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class BookmarkController extends Controller
{
    public function bookmark($id)
    {
        $user_id = Auth::user()->id;

        $employ = DB::select('select * from bookmarks where employee_id = :employee_id AND job_id = :job_id' , ['employee_id' => $user_id,'job_id' => $id]);
       

        if(is_array($employ) && !empty($employ))
        //dd($employ);
        {
           return redirect('/job_index')->with('error','Sorry, You can only Bookmark once!');
        }
        
        $user_id = Auth::user()->id;
        
        $apply = new Bookmark;
        $apply->job_id = $id;
        $apply->employee_id = $user_id;
        //dd($apply);
        
        $apply->save();
        return redirect('/job_index')->with('success', 'Job bookmarked!');

    }

    public function show($id)
    {
        //$user_id = Auth::user()->id;
        $viewbookmarkjobs  = array();
        $bookmark_jobs = Bookmark::where('employee_id',$id)->get();
      
        for($i = 0 ; $i < count($bookmark_jobs);  $i++){

            $job_id = $bookmark_jobs[$i]->job_id;
            $viewbookmark = job::where('id',$job_id)->get();
            array_push($viewbookmarkjobs, $viewbookmark);
        }

        //dd($viewbookmarkjobs);
        //$viewbookmark = job::where('id',$user_id)->get();
        
        //$viewbookmark = Bookmark::where('job_id',$employee)->get();
        

        $employees = Employee::where('user_id',$id)->get();
        //dd($employees);

        $total_jobs =  "";
        $applied_num = Applied::where('employee_id',$id)->get();
        if($applied_num != "") $total_jobs = count($applied_num);

        $total_favorites =  "";
        $bookmarked_num = Bookmark::where('employee_id',$id)->get();
        if($bookmarked_num != "") $total_favorites = count($bookmarked_num);
        //dd($post);
        return view('employee/bookmark')->with('employees',$employees)->with('viewbookmarkjobs',$viewbookmarkjobs)->with("total_jobs",$total_jobs)->with("total_favorites",$total_favorites);
    }
}

