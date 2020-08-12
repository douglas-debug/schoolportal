@extends('layouts.mastered')

@section('title')
    Dashboard Employee | funda of web IT
@endsection

@section('resume-content')
<div class="profile section clearfix">
    <div class="profile-logo">
        <img class="img-fluid" src="{{asset('images/job/resume.jpg')}}" alt="Image">
    </div>
    <div class="profile-info">
       <h1> Employee view profile</h1>
       <br><br>
        <h1>{{$employee->fullname}}</h1>
        <address>
            <p>{{$employee->address}}<span>[email&#160;protected]</span></a></p>
        </address>
    </div>					
</div><!-- profile -->

<div class="career-objective section">
    <div class="icons">
        <i class="fa fa-black-tie" aria-hidden="true"></i>
    </div>   
    <div class="career-info">
        <h3>Career Objective</h3>
        <p>{{$employee->objective}}</p>
        <h3>Date</h3>
        <p>{{$employee->date}}</p>
    </div>                                 
</div><!-- career-objective -->

<div class="work-history section">
    <div class="icons">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
    </div>   
    <div class="work-info">
        <h3>Work History</h3>
        <p>{{$employee->companyworked}}</p>
        <h3>Designation</h3>
        <p>{{$employee->designation}}</p>
    </div>                                 
</div><!-- work-history -->
<div class="special-qualification: section">
    <div class="icons">
        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
    </div>	
    <div class="qualification">
        <h3>Years Of Experience :</h3>
        <p>{{$employee->experience}}</p>
        <h3>About yourself :</h3>
        <p>{{$employee->aboutyou}}</p>
    </div>				
</div><!-- educational-background -->



<div class="educational-background section">
    <div class="icons">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    </div>	
    <div class="educational-info">
        <h3>Education Background</h3>
        <ul>
            <li>
                <h4>Institute Name</h4>
                <ul>
                <li>{{$employee->institutename}}</li>
                </ul>
                </li>
            <li>
                <h4>Degree</h4>
                <ul>
                <li>{{$employee->highest_qualification}}</li>
                </ul>
            </li>
        </ul>
    </div>				
</div><!-- educational-background -->



<div class="language-proficiency section">
    <div class="icons">
        <i class="fa fa-language" aria-hidden="true"></i>
    </div>
    <div class="proficiency">
        <h3>Language Proficiency</h3>
        <ul class="list-inline">
            <li class="list-inline-item">
                <h5>{{$employee->Language}}</h5>
               
            </li>
      </ul>
    </div>
</div><!-- language-proficiency -->		



<div class="special-qualification: section">
    <div class="icons">
        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
    </div>	
    <div class="qualification">
        <h3>Rating:</h3>
        <ul>
        <li>{{$employee->rating}}</li>
        </ul>
    </div>				
</div><!-- educational-background -->

<div class="declaration section">
    <div class="icons">
        <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
    </div>   
    <div class="declaration-info">
        <h3>City</h3>
         <p>{{$employee->city}}</p>
    </div>   
    <small style="color:black">Date created -{{$employee->created_at}}</small>                              
</div><!-- career-objective -->										
<div class="buttons">
    <a href="/employeedashboard" class="btn">Back</a>
   
</div>
<div class="download-button resume">
    <a href="#" class="btn">Download Resume as doc</a>
</div>
@endsection
@section('scripts')
    
@endsection