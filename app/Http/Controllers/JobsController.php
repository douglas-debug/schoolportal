<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Job;

use App\User;

use App\Employee;
use App\Employer;
use App\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $user_id =Auth::user()->id;
        $jobs =job::where('user_id',$user_id)->get();
        if(!$jobs){
          return redirect('/employerdashboard')->with('error','You have not create a profile yet please do so');
      }
        return view('job.index')->with('jobs',$jobs);


     }
  
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //
        $this->validate($request, [
            'company' => 'required',
            'Job_levels' => 'required',
            'job_title' => 'required',
            'short_description' => 'required',
            'phone' => 'required',
            'skills_requirements' => 'required',
            'highest_qualification'=>'required',
            'experience'=>'required',
            'salary'=>'required',
            'posted'=>'required',
            'city'=>'required',
            'due_date'=>'required|date_format:Y-m-d',
            'cover_image'=>'image|nullable|max:1999'
            

           ]);
           //Handling file upload
           if($request->hasFile('cover_image')){
               //file name with extension
               $fileNamewithExt =$request->file('cover_image')->getClientOriginalName();
               //get just filename
                  $filename = pathinfo($fileNamewithExt, PATHINFO_FILENAME);
               //get just ext
               $extension =$request->file('cover_image')->getClientOriginalExtension(); 
               //file name to store
               $fileNameToStore = $filename.'_'.time().'.'.$extension;
               //upload image
               $path =$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
           }
           else{
               $fileNameToStore ='noimage.jpg';
           }
           
           $job = new Job;
           $job->company = $request->input('company');
           $job->Job_levels = $request->input('Job_levels');
           $job->job_title = $request->input('job_title');
           $job->short_description = $request->input('short_description');
           $job->phone = $request->input('phone');
           $job->skills_requirements = $request->input('skills_requirements');
           $job->highest_qualification = $request->input('highest_qualification');
           $job->experience = $request->input('experience');
           $job->salary = $request->input('salary');
           $job->posted = $request->input('posted');
           $job->city = $request->input('city');
           $job->due_date = $request->input('due_date');
           $job->user_id =Auth::user()->id;
           $job->cover_image = $fileNameToStore;
           $job->save();
         
        
         return redirect('/employerdashboard')->with('success','Job created');    
           
        
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
        $job = Job::find($id);
        return view('job.show')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $job = Job::find($id);

        // check for correct user

       

        return view('job.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'company' => 'required',
            'Job_levels' => 'required',
            'job_title' => 'required',
            'short_description' => 'required',
            'phone' => 'required',
            'skills_requirements' => 'required',
            'highest_qualification'=>'required',
            'experience'=>'required',
            'salary'=>'required',
            'posted'=>'required',
            'city'=>'required'
            

           ]);
           //Handling file upload
           if($request->hasFile('cover_image')){
            //file name with extension
            $fileNamewithExt =$request->file('cover_image')->getClientOriginalName();
            //get just filename
               $filename = pathinfo($fileNamewithExt, PATHINFO_FILENAME);
            //get just ext
            $extension =$request->file('cover_image')->getClientOriginalExtension(); 
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path =$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
      
           $job = Job::find($id);
           $job->company = $request->input('company');
           $job->Job_levels = $request->input('Job_levels');
           $job->job_title = $request->input('job_title');
           $job->short_description = $request->input('short_description');
           $job->phone = $request->input('phone');
           $job->skills_requirements = $request->input('skills_requirements');
           $job->highest_qualification = $request->input('highest_qualification');
           $job->experience = $request->input('experience');
           $job->salary = $request->input('salary');
           $job->posted = $request->input('posted');
           $job->city = $request->input('city');
           if($request->hasFile('cover_image')){
            $job->cover_image =$fileNameToStore;
           }
           $job->save();
         
        
         return redirect('/employerdashboard')->with('success','Job updated');    
           
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           //
           $job = Job::find($id);
        
           // check for correct user
   
          /* if(auth()->user()->id !==$job->user_id){
               return redirect('/employerdashboard')->with('error','unauthorised page');
   
           }*/
           if ($job->cover_image != 'noimage.jpg') {
             //delete images
             Storage::delete('public/cover_images/'.$job->cover_image);
           }
           $job->delete();
           return redirect('/employerdashboard')->with('success','job delete');
       }
      
  
}
