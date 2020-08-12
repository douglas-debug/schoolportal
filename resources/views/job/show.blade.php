@extends('layouts.masters')

@section('title')
   Employer View| funda of web IT
@endsection

@section('page-wrapper')

<div class="page-wrapper">
        <div class="container">
                <div class="row">
                    
                    <div class="col sm-4">
                  <div class="contain-fluid">
               <h1>job view profile</h1>
                </div>      
               
                <td><img  style="width:100px" src="/storage/cover_images/{{$job->cover_image}}"></td> 
             <h5>{{$job->company}}</h5>
             <hr>
             <h5>{{$job->job_levels}}</p>
             <hr>
             <h5>{{$job->job_title}}</h5>
             <hr>
             <h5>{{$job->short_description}}</h5>
             <hr>
             <h5>{{$job->phone}}</h5>
             <hr> 
             <h5>{{$job->skills_requirements}}</h5>
             <hr> 
             <h5>{{$job->highest_qualification}}</h5>
             <hr> 
             <h5>{{$job->experience}}</h5>
             <hr> 
             <h5>{{$job->salary}}</h5>
             <hr> 
             <h5>{{$job->posted}}</h5>
             <hr> 
             <h5>{{$job->city}}</h5>
             <hr> 
            
             <hr> 
             <small style="color:aquamarine">Date created -{{$job->created_at}}</small>
             <br>
             <a href="/job" class="btn btn-primary ">Go Back To Show</a>
                    </div>
                </div>
</div>
@endsection

@section('scripts')
    
@endsection