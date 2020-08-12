
@extends('layouts.app')

@section('content')

<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li>Bookmark</li>
				</ol>						
				<h2 class="title">Bookmark</h2>
			</div><!-- breadcrumb-section -->

			
            
				 <div class="job-profile section">	
					<div class="user-profile">
						<div class="user-images">
							<img src="images/user.jpg" alt="User Images" class="img-fluid">
						</div>
						<div class="user">
							@if (count($employees)>0)
								
							
							@foreach ($employees as $employee)
								
							
							<h2>Hello, <a href="#">{{$employee->fullname}}</a></h2>
							
							<h5>You last logged in at: 10-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
						</div>
				
						<div class="favorites-user">
							<div class="my-ads">
								<a href="/appliedjob/{{$employee->user_id}}">{{$total_jobs}}<small>Apply Job</small></a>
								{{-- {{dd($employee->appliedjobs)}} --}}
							</div>
							<div class="favorites">
								<a href="/bookmark/{{$employee->user_id}}">{{$total_favorites}}<small>Favorites</small></a>
							</div>
						</div>								
					</div><!-- user-profile -->
							
					<ul class="user-menu">
						<li class="active"><a href="/employee">Account Info </a></li>
						<li><a href="/employee/{{$employee->user_id}}">View Resume</a></li>
						<li><a href="/employeeprofile/{{$employee->user_id}}/edit">Edit Resume</a></li>
						<li><a href="/profiledetails">Profile Details</a></li>
						<li><a href="/bookmark/{{$employee->user_id}}">Bookmark</a></li>
						<li><a href="/appliedjob/{{$employee->user_id}}">applied job</a></li>
						<li> <form action="{{route('employee.destroy',  $employee->id)}}" method="POST">
                            <!--<input type="hidden" name="_method" value="DELETE">-->
                            @csrf
       
                            @method('DELETE') 
        <button onclick='javascript: return confirm("Do you really want to delete this ACCOUNT?")'  class="btn-danger btn-sm active float-right">Close account</button>
    </form></li>
					</ul>
					   @endforeach
						@else
							<p>Please create profile</p>
						@endif
				</div><!-- ad-profile -->
				@if(count($viewbookmarkjobs)> 0)
					{{--dd($viewbookmarkjobs)--}}
				 @foreach ($viewbookmarkjobs as $bookmarkedjob)

			<div class="section trending-ads latest-jobs-ads">
				<h4>Bookmark</h4>

				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="#"><img  style="width:100px" src="/storage/cover_images/{{$bookmarkedjob[0]->cover_image}}" class="img-fluid"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
						<span><strong><a href="#{{$bookmarkedjob[0]->id}}" class="title">{{$bookmarkedjob[0]->company}}</a></strong> @ <a href="#">{{$bookmarkedjob[0]->job_levels}}</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$bookmarkedjob[0]->city}}</a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$bookmarkedjob[0]->skills_requirements}}</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{$bookmarkedjob[0]->salary}} - {{$bookmarkedjob[0]->salary}}</a></li>
									
								</ul>
								<br><br>
								<div><small>Posted On{{$bookmarkedjob[0]->created_at}}</small></div>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
					</div><!-- item-info -->
			   </div><!-- job-ad-item -->

					
			   
				@endforeach
				@else
					<p><strong> Haven't Bookmark Any Job Yet.</strong></p>
					
				
				@endif	

				</div><!-- latest-jobs-ads -->									
		</div><!-- container -->
	</section><!-- ad-profile-page -->

@endsection