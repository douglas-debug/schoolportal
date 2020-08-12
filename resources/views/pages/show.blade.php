@extends('layouts.app')
@section('content')
<section class="job-bg page job-details-page">
    <div class="container">
<div class="job-details">
    <div class="section job-ad-item">
        <div class="item-info">
            <div class="item-image-box">
                <div class="item-image">
                    <img src="/storage/cover_images/{{$jobs->cover_image}}" alt="Image" class="img-fluid">
                </div><!-- item-image -->
            </div>

            <div class="ad-info">
                <span><span><a href="#" class="title">{{$jobs->company}}</span>
                <div class="ad-meta">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$jobs->city}}</li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$jobs->posted}}</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i>{{$jobs->salary}}</li>
                        <li><i class="fa fa-tags" aria-hidden="true"></i>{{$jobs->job_title}}</li>
                        <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline:<b style="color:red">{{$jobs->due_date}}</b></li>
                            <?php
                            $present = new DateTime('now');
                            $future = $jobs->due_date;
                            $interval = date_diff($present, $future);
                            $interval->format('%Y years, %M months and %d days');
                            $yr = substr($future, 0, 4);
                            $mm = substr($future, 5, 2);
                            $dd = substr($future, 8,2);
                            $newformat = date("M", mktime(0,0,0, $mm, 10))." ".$dd.", ".$yr . " 00:00:00";
                         //dd($newformat);
                        ?>
                        <br/><br/>
                        <div><p id="demo" style=" text-align: center;font-size: 20px; "></p> 
                        </div>
                        
                        <script> 
                                var date_due = "<?=$newformat?>";
                                var deadline = new Date(date_due).getTime(); 
                                var x = setInterval(function() { 
                                   // alert(deadline);
                                var now = new Date().getTime(); 
                                var t = deadline - now; 
                                var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
                                var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
                                var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
                                var seconds = Math.floor((t % (1000 * 60)) / 1000); 
                                document.getElementById("demo").innerHTML = days + "d "  
                                + hours + "h " + minutes + "m " + seconds + "s "; 
                                    if (t < 0) { 
                                        clearInterval(x); 
                                        document.getElementById("demo").innerHTML = "EXPIRED"; 
                                    } 
                                }, 1000); 
                        </script> 
               <!-- <script>
                   
                       for(var i=2; i<100; i++){
                           var prime=true;
                           for (var x=2; x<i; x++){
                               if(i % x ==0 && i!=x){
                                   prime = false;
                               }
                           }
                           if(prime == true)
                           document.write("</br>"+ i +"is a prime number");
                       
                   }
                  
                </script>-->
                      
                     
                    </ul>
                </div><!-- ad-meta -->									
            </div><!-- ad-info -->
        </div><!-- item-info -->
        <div class="social-media">
            <div class="button">
                <a href="/show/applied/{{$jobs->id}}" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
                <a href="/show/bookmark/{{$jobs->id}}" class="btn btn-primary bookmark"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Bookmark</a>
            </div>
            <ul class="share-social">
                <li>Share this ad</li>
                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
            </ul>
        </div>					
    </div><!-- job-ad-item -->
    
    <div class="job-details-info">
        <div class="row">
            <div class="col-sm-8">
                <div class="section job-description">
                    <div class="description-info">
                        <h1>Description</h1>
                        <p>{{$jobs->job_levels}}</p>
                    </div>
                    <div class="responsibilities">
                        <h1>Key Responsibilities:</h1>
                        <p>{{$jobs->short_description}}</p>
                    </div>
                    <div class="requirements">
                        <h1>Minimum Requirements</h1>
                        <ul>
                            <li>{{$jobs->highest_qualification}}</li>
                            <br><br>
                            <h1>Experience</h1>
                            <li>{{$jobs->experience}}</li>
                            <br><br>
                            <h1>skills Requirements</h1>
                            <li>{{$jobs->skills_requirements}}</li>
                            <br><br>
                            <li>for more informations contact this number &nbsp;{{$jobs->phone}}</li>
                            <br><br>
                            <li>In depth knowledge & technical experience of Adobe PDF, Keynote, PowerPoint, Microsoft Word & Excel</li>
                            <br><br>
                            <li>Exceptional eye for design, deep understanding of creativity and ability to recognize fresh approaches to Advertising </li>
                            <br><br>
                            <li>Must be fluent in Spanish; working written and spoken proficiency</li>
                            <br><br>
                            <li>**All applicants must be eligible to work in the U.S. without sponsorship</li>
                            <br><br>
                        </ul>
                    </div>	
                    <button><a href="/job_index" class="btn btn-primary ">Go Back To Show</a></button>					
                </div>							
            </div>
            <div class="col-sm-4">
                <div class="section job-short-info">
                    <h1>Short Info</h1>
                    <ul>
                        <li><span class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></span>Posted:{{$jobs->posted}}</li>
                        <li><span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Job poster: {{$jobs->id}}</li>
                        <li><span class="icon"><i class="fa fa-industry" aria-hidden="true"></i></span>Industry: {{$jobs->job_title}}</li>
                        <li><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Experience: {{$jobs->experience}}</li>
                        <li><span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>Job function: {{$jobs->short_description}}</li>
                    </ul>
                </div>
                <div class="section company-info">
                    <h1>Company Info</h1>
                    <ul>
                        <li>Compnay Name: {{$jobs->company}}</li>
                        <li>Address:{{$jobs->city}}</li>
                        <li>Compnay SIze:  2k Employee</li>
                        <li>Industry:{{$jobs->job_title}} </li>
                        <li>Phone: {{$jobs->phone}}</li>
                        <li>Website: www.{{$jobs->company}}.com</li>
                    </ul>
                    <ul class="share-social">
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    </ul>								
                </div>
                
            </div>
        </div><!-- row -->					
    </div><!-- job-details-info -->				
</div><!-- job-details -->
</section>
@endsection