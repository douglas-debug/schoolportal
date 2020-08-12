<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 12:56:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>
        @yield('title')
    </title>

   <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/icofont.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/slidr.css')}}">     
    <link rel="stylesheet" href="{{asset('css/main.css')}}">  
	<link id="preset" rel="stylesheet" href="{{asset('css/presets/preset1.css')}}">	
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="{{asset('images/ico/favicon.ico')}}">	
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
  
  </head>
  <body>

	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
				<ol class="breadcrumb">
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
						<h2>Hello, <a href="/employeedashboard">{{ Auth::user()->name.''.Auth::user()->email }}</a></h2>
						
					</div>	
					<div class="favorites-user">
						<div class="my-ads">
						
						</div>
						<div class="favorites">
							<a href="bookmark.html">18<small>Favorites</small></a>
						</div>
					</div>						
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li class="{{''== request()->path() ? 'active' : ''}}"><a href="/employeedashboard">Dashboard</a></li>
					<li class="{{'/employee/create'== request()->path() ? 'active' : ''}}"><a href="/employee/create">Create Resume</a></li>
					<li><a href="/employee">Show Resume</a></li>
					<li><a href="resume.html">View Resume</a></li>
					<li><a href="/deleteaccount">Close account</a></li>
					<li><a href="applied-job.html">applied job</a></li>
					<li class="{{''== request()->path() ? 'active' : ''}}"><a href="profile.html">Account Info </a></li>
					<li><a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
						</a></li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
				</ul>
				
			</div><!-- ad-profile -->
				
			<div class="resume-content">
				@include('inc.messages')
                @yield('resume-content')
			</div><!-- resume-content -->						
		</div><!-- container -->
	</section><!-- ad-profile-page -->

	<!-- footer -->
	<footer id="footer" class="clearfix">
	
		<div class="footer-bottom clearfix text-center">
			<div class="container">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>&nbsp;&nbsp;All rights reserved Developed by Jobberpro
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	

	
    <!-- JS -->
    <script data-cfasync="false" src="{{asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/price-range.js')}}"></script>   
    <script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/switcher.js')}}"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

    </script>	
    @yield('scripts')
  </body>
</html>