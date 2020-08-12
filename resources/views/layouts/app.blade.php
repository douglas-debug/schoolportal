<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FindJob') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

 


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
    <div id="app">
            <header id="header" class="clearfix">
                    <!-- navbar -->
                    <nav class="navbar navbar-default navbar-expand-lg">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                            </button>
                            <a class="navbar-brand" href="/"><img class="img-fluid" src="{{asset('images/logo.png')}}" alt="Logo"></a>
                            
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/job_index">Job list</a></li>
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Account Info<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/employee">Profile</a></li>
                                             <li><a href="/job_index">Job Post</a></li>
                                        </ul>
                                    </li>
                                  </ul>
                            </div>      
                                         
                                  
                              
                            
                            <!-- nav-right -->
                            <div class="nav-right">				
                                <ul class="sign-in">
                                   @guest
                                    <li><i class="fa fa-user"></i></li>
                                    <li><a href="/signin">Sign In</a></li>
                                    &nbsp;
                                @if (Route::has('register'))
                                    <li><a href="/icon">Register</a></li>
                                </ul><!-- sign-in -->					
                                @endif

                                &nbsp;&nbsp;<a href="/job_index" class="btn">Posted Jobs</a>
                            </div>
                            
                            <!-- nav-right -->

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name.''.Auth::user()->email }} <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                        </div><!-- container -->

                        
                    </nav><!-- navbar -->
                </header><!-- header -->

        <main class="py-4">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>    

      	<!-- footer -->
	<footer id="footer" class="clearfix">
            <!-- footer-top -->
            <section class="footer-top clearfix">
                <div class="container">
                    <div class="row">
                        <!-- footer-widget -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h3>Quik Links</h3>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">All Cities</a></li>
                                    <li><a href="#">Help & Support</a></li>
                                    <li><a href="#">Advertise With Us</a></li>
                                </ul>
                            </div>
                        </div><!-- footer-widget -->
    
                        <!-- footer-widget -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h3>How to sell fast</h3>
                                <ul>
                                    <li><a href="#">How to sell fast</a></li>
                                    <li><a href="#">Membership</a></li>
                                    <li><a href="#">Banner Advertising</a></li>
                                    <li><a href="#">Promote your ad</a></li>
                                    <li><a href="#">Jobs Delivers</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div><!-- footer-widget -->
    
                        <!-- footer-widget -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget social-widget">
                                <h3>Follow us on</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                                </ul>
                            </div>
                        </div><!-- footer-widget -->
    
    
    
    
    
                        <!-- footer-widget -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget news-letter">
                                <h3>Newsletter</h3>
                                <p>FindJobs is Worldest leading Portal platform that brings!</p>
                                <!-- form -->
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Your email id">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </form><!-- form -->			
                            </div>
                        </div><!-- footer-widget -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- footer-top -->
            <div class="footer-bottom clearfix text-center">
                <div class="container">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>&nbsp;&nbsp;All rights reserved Developed by Jobberman
                </div>
            </div><!-<!-- footer-bottom -->
    </footer><!-- footer -->
        
        <!--/Preset Style Chooser--> 
        <div class="style-chooser">
            <div class="style-chooser-inner">
                <a href="#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
                <h4>Presets</h4>
                <ul class="preset-list clearfix">
                    <li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
                    <li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
                    <li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>
                    <li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
                </ul>
            </div>
        </div>
        <!--/End:Preset Style Chooser-->
        
          <!-- JS -->
    <script data-cfasync="false" src="{{asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/price-range.js')}}"></script>   
    <script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/switcher.js')}}"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m),
	  }),(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

    </script>	
      </body>
    
    <!-- Mirrored from demo.themeregion.com/jobs/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 12:56:20 GMT -->
    </html>
  
