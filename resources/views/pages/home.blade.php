@extends('layouts.app')
@section('content')
<div class="banner-job">
		<div class="banner-overlay"></div>
		<div class="container text-center">
			<h1 class="title">The Easiest Way to Get Your New Job</h1>
			<h3>We offer 12000 jobs vacation right now</h3>
			<div class="banner-form">
				<form action="#" class="clearfix">
					<div class="dropdown category-dropdown">	
						<select class="dropdown category-dropdown" name="job_available">
							<option value="">Job Available</option>
							<option value="Accounting, Auditing, Finance">Accounting, Auditing, Finance</option>
							<option value="Administrative & Office Work">Administrative & Office Work</option>
							<option value="Agriculture and Farming">Agriculture and Farming</option>
							<option value="Building & Architecture">Building & Architecture</option>
							<option value="Community & Social Services">Community & Social Services</option>
							<option value="Consulting & Strategy">Consulting & Strategy</option>
							<option value="Creative & Design">Creative & Design</option>
							<option value="Customer Service & Support">Customer Service & Support</option>
							<option value="Employability & Soft Skills">Employability & Soft Skills</option>
							<option value="Engineering">Engineering</option>
							<option value="Food Services & Catering">Food Services & Catering</option>
							<option value="Health & Safety">Health & Safety</option>
							<option value="Hospitality/Leisure/Travel">Hospitality/Leisure/Travel</option>
							<option value="Human Reasources">Human Resources</option>
							<option value="IT & Software">IT & Software</option>
							<option value="Legal Services">Legal Services</option>
							<option value="Management & Business">Management & Business</option>
							<option value="Development">Development</option>
							<option value="Marketing & Communications">Marketing & Communications</option>
							<option value="Medical & Pharmaceutical">Medical & Pharmaceutical</option>
							<option value="Natural Sciences">Natural Sciences</option>
							<option value="Project & Product Management">Project & Product Management</option>
							<option value="Quality Control & Assuranc">Quality Control & Assurance</option>
							<option value="Real Estate & Property Management">Real Estate & Property Management</option>
							<option value="Research, Teaching & Training">Research, Teaching & Training</option>
							<option value="Sales">Sales</option>
							<option value="Security">Security</option>
							<option value="Supply Chain & Procurement">Supply Chain & Procurement</option>
							<option value="Trades & Services">Trades & Services</option>
							<option value="Transport & Logistics">Transport & Logistics</option>
							<option value="Other">Other</option>
						</select>
										 
						</div>
					<div class="dropdown category-dropdown">	
						<select class="dropdown category-dropdown" name="city">
							<option value="">City</option>
							<option value='Lagos'>Lagos</option>
							<option value="Abuja">Abuja</option>
							<option value="Rivers">Rivers</option>
							<option value="Anambra">Anambra</option>
							<option value="Abia">Abia</option>
							<option value="Ogun">Ogun</option>
							<option value="Ondo">Ondo</option>
							<option value="Enugu">Enugu</option>
							<option value="Plateau">Plateau</option>
							<option value="Kanu">Kanu</option>
							<option value="Bornu">Bornu</option>
							<option value="Delta">Delta</option>
							<option value="Kwara">Kwara</option>
							<option value="Calabar">Calabar</option>
							<option value="Imo">Imo</option>
							<option value="Adamawa">Adamawa</option>
							<option value="Akwa Ibom">Akwa Ibom</option>
							<option value="Bauchi">Bauchi</option>
							<option value="Bayelsa">Bayelsa</option>
							<option value="Benue">Benue</option>
							<option value="Cross River">Cross River</option>
							<option value="Ebonyi">Ebonyi</option>
							<option value="Edo">Edo</option>
							<option value="Ekiti">Ekiti</option>
							<option value="Gombe">Gombe</option>
							<option value="Jigawa">Jigawa</option>
							<option value="Kaduna">Kaduna</option>
							<option value="Kastina">Kastina</option>
							<option value="Kebbi">Kebbi</option>
							<option value="Kogi">Kogi</option>
							<option value="Nasarawa">Nasarawa</option>
							<option value="Niger">Niger</option>
							<option value="Osun">Osun</option>
							<option value="Oyo">Oyo</option>
							<option value="Sokoto">Sokoto</option>
							<option value="Taraba">Taraba</option>
							<option value="Yobe">Yobe</option>
							<option value="Zamfara">Zamfara</option>
						</select>					
					</div>
					<button type="submit" class="btn btn-primary" value="Search">Search</button>
				</form>
			</div><!-- banner-form -->
			
			<ul class="banner-socail list-inline">
				<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
			</ul><!-- banner-socail -->
		</div><!-- container -->
	</div><!-- banner-section -->

	<div class="page">
		<div class="container">
			<div class="section category-items job-category-items  text-center">
				<ul class="category-list">	
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/1.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Accounting/Finance</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/2.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Education/Training</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/3.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Engineer/Architects</span>
							<span class="category-quantity">(212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/4.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Garments/Textile</span>
							<span class="category-quantity">(972)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/5.png" alt="images" class="img-fluid"></div>
							<span class="category-title">HR/Org. Development</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/6.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Design/Creative</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/7.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Research/Consultancy</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/8.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Medical/Pharma</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/9.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Music & Arts</span>
							<span class="category-quantity">(212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/10.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Marketing/Sales</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/11.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Production/Operation</span>
							<span class="category-quantity">(124)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="images/icon/12.png" alt="images" class="img-fluid"></div>
							<span class="category-title">Miscellaneous</span>
							<span class="category-quantity">(972)</span>
						</a>
					</li><!-- category-item -->					
				</ul>				
			</div><!-- category ad -->			

			<div class="section latest-jobs-ads">
				<div class="section-title tab-manu">
					<h4>Latest Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#hot-jobs" data-toggle="tab">Hot Jobs</a></li>
						<li role="presentation"><a href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
						<li role="presentation"><a class="active" href="#popular-jobs" data-toggle="tab">Popular Jobs</a></li>
					</ul>
				</div>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in" id="hot-jobs">
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class=title>CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class=title>Graphics Designer</a> @ <a href="#">AOK Security</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class=title>Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->						
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in active show" id="popular-jobs">
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->
					</div><!-- tab-pane -->
				</div><!-- tab-content -->
			</div><!-- trending ads -->		

			<div class="ad-section text-center">
				<a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-fluid"></a>
			</div><!-- ad-section -->
				<div class="section cta cta-two text-center">
				<div class="row">
					<div class="col-md-4">
						<div class="single-cta">
							<div class="cta-icon icon-jobs">
								<img src="images/icon/31.png" alt="Icon" class="img-fluid">
							</div><!-- cta-icon -->
							<h3>3,412</h3>
							<h4>Live Jobs</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-md-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-company">
								<img src="images/icon/32.png" alt="Icon" class="img-fluid">
							</div><!-- cta-icon -->
							<h3>12,043</h3>
							<h4>Total Company</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-md-4">
						<div class="single-cta">
							<div class="cta-icon icon-candidate">
								<img src="images/icon/33.png" alt="Icon" class="img-fluid">
							</div><!-- cta-icon -->
							<h3>5,798,298</h3>
							<h4>Total Candidate</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->			

		</div><!-- conainer -->
	</div><!-- page -->
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Download on App Store</h2>
				</div>
			</div><!-- row -->

			<!-- row -->
			<div class="row">
				<!-- download-app -->
				<div class="col-md-4">
					<a href="#" class="download-app">
						<img src="images/icon/16.png" alt="Image" class="img-fluid">
						<span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-md-4">
					<a href="#" class="download-app">
						<img src="images/icon/17.png" alt="Image" class="img-fluid">
						<span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-md-4">
					<a href="#" class="download-app">
						<img src="images/icon/18.png" alt="Image" class="img-fluid">
						<span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
					</a>
				</div><!-- download-app -->
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->
	
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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>	
 @endsection

       
 
