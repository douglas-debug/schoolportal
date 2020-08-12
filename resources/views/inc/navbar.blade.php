<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
     <meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

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
    <link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
<!-- icons -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Template Developed By ThemeRegion -->

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
    
            </ul>
           
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index-2.html">Home</a></li>
						<li><a href="job-list.html">Job list</a></li>
						<li><a href="details.html">Job Details</a></li>
						<li><a href="resume.html">Resume</a></li> 
						<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="profile.html">Profile</a></li>
								<li><a href="post-resume.html">Post Resume</a></li>
								<li><a href="post.html">Job Post</a></li>
								<li><a href="edit-resume.html">Edit Resume</a></li>
								<li><a href="profile-details.html">profile Details</a></li>
								<li><a href="bookmark.html">Bookmark</a></li>
								<li><a href="applied-job.html">Applied Job</a></li>
								<li><a href="delete-account.html">Close Account</a></li>
								<li><a href="/signup">Job Signup</a></li>
								<li><a href="/signin">Job Signin</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">				
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="/signin">Sign In</a></li>
						<li><a href="/signup">Register</a></li>
					</ul><!-- sign-in -->					

					<a href="post.html" class="btn">Post Your Job</a>
				</div>
    
            <!-- Right Side Of Navbar -->
            
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
        &nbsp;
    @if (Route::has('register'))
    <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>           
    @endif
    @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name.''.Auth::user()->lastname }} <span class="caret"></span>
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
    
    </ul>
    </div>
    </div>
    </nav>

<script src="{{asset('js/jquery.min.js')}}"></script>
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
</body>