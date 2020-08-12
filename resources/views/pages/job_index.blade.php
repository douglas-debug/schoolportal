@extends('layouts.app')
@section('content')

	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
<!-- recommended-ads -->
					<div class="container-fluid">				
						<div class="section job-list-item">
							<div class="featured-top clearfix">
								<h4>Job posted by Employers</h4>
								<div class="dropdown pull-right">
									<div class="dropdown category-dropdown">
										<h5>Sort by:</h5>						
										<a data-toggle="dropdown" href="#"><span class="change-text">Most Relevant</span><i class="fa fa-caret-square-o-down"></i></a>
										<ul class="dropdown-menu category-change">
											<li><a href="#">Most Relevant</a></li>
											<li><a href="#">Most Popular</a></li>
										</ul>								
									</div><!-- category-change -->		
								</div>							
							</div><!-- featured-top -->	

						
						

							<div class="job-ad-item">
								@if(isset($jobs) && count($jobs) >0)
                                @foreach($jobs as $job)
									
								
								<div class="item-info">
									<div class="item-image-box">
										<div class="item-image">
										<a href="/show/{{$job->id}}"><img  style="width:100px" src="/storage/cover_images/{{$job->cover_image}}"></a>
										</div><!-- item-image -->
									</div>

									<div class="ad-info">
										<span><a href="/show/{{$job->id}}" class="title">{{$job->company}}</span>
										<div class="ad-meta">
											<ul>
												<li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$job->city}}</li>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$job->posted}}</li>
												<li><i class="fa fa-money" aria-hidden="true"></i>{{$job->salary}}</li>
											</ul>
										</div><!-- ad-meta -->									
									</div><!-- ad-info -->
								</div><!-- item-info -->
								@endforeach
								{{$jobs->links()}} 
								@else
								<p>No jobs found</p>
								@endif
						

										
						</div>
                    </div><!-- recommended-ads -->
                </section>
                      @endsection