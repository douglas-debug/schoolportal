@extends('layouts.app')
@section('content')

	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li>Employee Profile</li>
				</ol>						
				<h2 class="title">My Profile</h2>
			</div><!-- breadcrumb-section -->
			
			<div class="job-profile section">	
                @if(isset($employees) && count($employees) >0)
                     @foreach($employees as $employee)
				<div class="user-profile">
					<div class="user-images">
						<img src="{{asset('images/user.jpg')}}" alt="User Images" class="img-fluid">
					</div>
					<div class="user">
						<h2>Hello, <a href="#">{{$employee->fullname}}</a></h2>
						<h5>You last logged in at: 10-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
					</div>

					<div class="favorites-user">
						<div class="my-ads">
							<a href="/appliedjob/{{$employee->user_id}}">{{$total_jobs}}<small>Apply Job</small></a>
						</div>
						<div class="favorites">
							<a href="/bookmark/{{$employee->user_id}}">{{$total_favorites}}<small>Favorites</small></a>
						</div>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li class="active"><a href="/employee">Account Info </a></li>
					<li><a href="/employee/create">create Resume</a></li>
					<li><a href="/employeedashboard">Welcome</a></li>
                    <li><a href="/employee/{{$employee->id}}/edit">Edit Resume</a></li>
                    <li><a href='/employee/{{$employee->id}}'>View</a></li>
            		<li><a href="/bookmark/{{$employee->user_id}}">Bookmark</a></li>
					<li><a href="/appliedjob/{{$employee->user_id}}">applied job</a></li>
                    <li> <form action="{{route('employee.destroy',  $employee->id)}}" method="POST">
                        <!--<input type="hidden" name="_method" value="DELETE">-->
                        @csrf
   
                        @method('DELETE') 
    <button onclick='javascript: return confirm("Do you really want to delete this ACCOUNT?")'  class="btn-danger btn-sm active float-right">Close account</button>
</form></li>
				</ul>
			</div><!-- ad-profile -->

			<div class="resume-content">
				<div class="profile section clearfix">
					<div class="profile-logo">
					    <img class="img-fluid" src="images/job/resume.jpg" alt="Image">
					</div>
					<div class="profile-info">
					    <h1>{{$employee->fullname}}</h1>
					    <address>
					        <p>{{$employee->address}}</p>
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
			</div><!-- resume-content -->						
        </div><!-- container -->
        @endforeach 
        
        @endif 
	</section><!-- ad-profile-page -->

    @endsection