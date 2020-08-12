@extends('layouts.app')
@section('content')

<section class=" job-bg page  ad-profile-page">
    <div class="container">
        <div class="breadcrumb-section">
           					
            <h2 class="title">Create Profile</h2>
        </div><!-- breadcrumb-section -->
        <div class="job-profile section">	
            <div class="user-profile">
                <div class="user-images">
                    <img src="{{asset('images/user.jpg')}}" alt="User Images" class="img-fluid">
                </div>
                <div class="user">
                    <h2>Hello, <a href="#">{{ Auth::user()->name.''.Auth::user()->email }}</a></h2>
                    <h5></h5>
                </div>

               								
            </div><!-- user-profile -->
           				
				<ul class="user-menu">
					<li class="active"><a href="/employee">Account Info </a></li>
					<li><a href="/employee/create">create Resume</a></li>
					<li><a href="/employeedashboard">Edit Resume</a></li>
					<li><a href="profile-details.html">Profile Details</a></li>
					<li><a href="bookmark.html">Bookmark</a></li>
					<li><a href="applied-job.html">applied job</a></li>
                    
				</ul>
        </div><!-- ad-profile -->
        <div class="adpost-details post-resume">
            <div class="row">	
                <div class="col-lg-8 clearfix">
                    <form action="{{ route('employee.store') }}" method="POST">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="section express-yourself">
                                <h4>Express Yourself</h4>
                                <div class="row form-group">
                                    <label class="col-md-4 label-title">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="fullname" class="form-control" placeholder="ex Jhon Doe">
                                    </div>
                                </div>
                                <div class="row form-group additional-information">
                                    <label class="col-md-4 label-title">Address</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" type="text"  name="address" placeholder="Address: 123 West 12th Street,"></textarea>
                                    </div>
                                </div>
                                
                               </div>
                            
                            <div class="section career-objective">
                                <h4>Career Objective</h4>
                                <div class="form-group">
                                    <textarea class="form-control" type="text"  name="objective" placeholder="Write few lines about your career objective" rows="8"></textarea>		
                                </div>
                               
                            </div>
                            <div class="row form-group time-period">
                               <label class="col-md-3 label-title">Date of Birth</label>
                                <div class="col-md-8">
                                    <input type="date" name="date" class="form-control" placeholder="dd/mm/yy"><span>
                                    
                                </div>
                            </div>
                            <div class="section">
                                <h4>Work Experience</h4>
                                <div class="row form-group">
                                    <label class="col-md-3 label-title">Compnay Worked At</label>
                                    <div class="col-md-9">
                                        <input type="text" name="companyworked" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-3 label-title">Designation</label>
                                    <div class="col-md-9">
                         <select class="col-md-9" name="designation" type="text" style="height:50px; border-radius:10px">
                            <option value="">Job Sector</option>
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
                        <option value="Human Reasources">Human Reasources</option>
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
                                </div>
                                <div class="row form-group time-period">
                                    <label class="col-md-3 label-title">Years Of Experience</label>
                                    <div class="col-md-9">
                                        <input type="text" name="experience" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group job-description">
                                    <label class="col-md-3 label-title">About Yourself</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" placeholder="" type="text"  name="aboutyou" rows="8"></textarea>		
                                    </div>
                                </div>
                                
                            </div><!-- work-history -->
                            
                            <div class="section education-background">
                                <h4>Education Background</h4>
                                <div class="row form-group">
                                    <label class="col-md-3 label-title">Institute Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="institutename" class="form-control" placeholder="ropbox">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-3 label-title">Degree</label>
                                    <div class="col-md-9">
                                        <select class="col-md-9" name="highest_qualification" type="text" style="height:50px; border-radius:10px">
                                            <option value="">Highest Qualification</option>
                                            <option value="Secondary School Leaving Certificate">Secondary School Leaving Certificate</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="HND">HND</option>
                                            <option value="OND">OND</option>
                                            <option value="BA/BSc">BA/BSc</option>
                                            <option value="NCE">NCE</option>
                                            <option value="MBA/MSc">MBA/MSc</option>
                                            <option value="MBBS">MBBS</option>
                                            <option value="MPhil/PhD">MPhil/PhD</option>
                                            <option value="Vocational">Vocational</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                                                                           
                            </div><!-- work-history -->

                                <div class="section language-proficiency">
                                <h4>Language Proficiency:</h4>
                                <div class="row form-group">
                                    <label class="col-md-3 label-title">Language Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="Language" class="form-control" placeholder="English">
                                    </div>
                                </div>
                                <div class="row form-group rating">
                                    <label class="col-md-3 label-title">Rating</label>
                                    <div class="col-md-9">
                                        <div class="rating-star">
                                            <div class="rating">
                                                <input type="radio" id="star1" name="rating"><label class="full" for="star1"></label>

                                                <input type="radio" id="star2" name="rating"><label class="half" for="star2"></label>

                                                <input type="radio" id="star3" name="rating"><label class="full" for="star3"></label>

                                                <input type="radio" id="star4" name="rating"><label class="half" for="star4"></label>

                                                <input type="radio" id="star5" name="rating"><label class="full" for="star5"></label>

                                                <input type="radio" id="star6" name="rating"><label class="half" for="star6"></label>

                                                <input type="radio" id="star7" name="rating"><label class="full" for="star7"></label>

                                                <input type="radio" id="star8" name="rating"><label class="half" for="star8"></label>

                                                <input type="radio" id="star9" name="rating"><label class="full" for="star9"></label>

                                                <input type="radio" id="star10" name="rating"><label class="half" for="star10"></label>
                                            </div>
                                        </div><!-- rating-star -->
                                    </div>
                                </div>
                               
                            </div><!-- language-proficiency -->
                           <div class="section special-qualification">
                                <h4>City</h4>
                                <div class="row form-group">
                                    <label class="col-md-3 label-title">City</label>
                                    <div class="col-md-9">
                                        <select class="col-md-9" name="city" type="text" style="height:50px; border-radius:10px">
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
                                            <option value="Zamfara">Zamfara</option>>
                                        </select>
                                    </div>
                                </div>			
                               <!-- <div class="row form-group photos-resume">
                                        <label class="col-md-4 label-title">Photos for your Resume</label>
                                        <div class="col-md-8 ">
                                            <label class="upload-image left" for="upload-image-one">
                                                <input type="file" id="upload-image-one">
                                                Type: JPG, PNG  Size: 3.5 x 4.5 cm
                                            </label>
                                            <label class="upload-image" for="upload-image-two">
                                                <input type="file" id="upload-image-two">
                                                Upload Photo
                                            </label>
                                        </div>
                                    </div>					-->
                            </div><!-- special-qualification -->	
                        </fieldset>
                        
                         <div class="buttons">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="submit" class="btn btn-success">Cancle</button>
                    </div>
                    </form><!-- form -->
                   							
                </div>
            
           
            </div><!-- photos-ad -->				
        </div>	
    </div><!-- container -->
</section><!-- main -->
    
@endsection