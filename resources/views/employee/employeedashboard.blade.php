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
				<div class="user-profile">
					<div class="user-images">
						<img src="{{asset('images/user.jpg')}}" alt="User Images" class="img-fluid">
					</div>
					<div class="user">
						<h2>Hello, <a href="#">{{ Auth::user()->name.''.Auth::user()->email }}</a></h2>
					
					</div>

											
				</div><!-- user-profile -->
						
								
				<ul class="user-menu">
					<li class="active"><a href="/employee">Account Info </a></li>
					<li><a href="/employee/create">create Resume</a></li>
					<li><a href="/employeedashboard">Edit Resume</a></li>
					
    
				</ul>
			</div><!-- ad-profile -->
<div class="declaration section">
    <div class="icons">
        <i class="fa fa-dashboard" aria-hidden="true"></i>
    </div>   
    <div class="declaration-info">
        <h1 style="text-align:center">You are logged in! To Employee Dashboard</h1>
        <h3>All of Employee components have been modified to 
            and provide a consistent look throughout</h3>
</div><!-- career-objective -->									




    
@endsection








