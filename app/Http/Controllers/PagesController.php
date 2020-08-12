<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;


class PagesController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth',['except'=>['home','icon','signin','signup','signup2']]);
    }

    //
    public  function home(){
        return view('pages.home');
    }

    public  function icon(){
        return view('pages.icon');
    }

    public  function signup2(){
        return view('pages.signup2');
    }
    
    public  function job_index(){
     $jobs = Job::orderBy('created_at','desc')->paginate(10);
        return view('pages.job_index')->with('jobs',$jobs);
    }
    public  function show(Request $request,$id){
        $jobs = Job::findorFail($id);
           return view('pages.show')->with('jobs',$jobs);
       }
    public function signin(){
        $title ='signin';
        return view('pages.signin')->with($title);
    }
    
    public function signup(){
        $title ='signup';
        return view('pages.signup')->with($title);
    }
}
