@extends('layouts.masters')

@section('title')
   Job create| funda of web IT
@endsection

@section('page-wrapper')

<div class="page-wrapper">

        
        <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Jobs Create Form</h5>
                <br><br>
                <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control international-inputmask" name="company" placeholder="company">
                </div>
                <div class="form-group">
                    <label for="job_levels" class="form-control international-inputmask">{{ __('Levels') }}</label>
                    <select id="Job_levels" type="text" class="form-control @error('Job_levels') is-invalid @enderror" name="Job_levels" required autocomplete="Job_levels" autofocus>
                            <option value="">Levels</option>
                             <option value="Advance">Advance</option>
                            <option value="Senior">Senior</option>
                            <option value="Junior">Junior</option>
                            <option value="Others">Others</option>
                        </select>
                @error('Job_levels')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <div class="form-group">
                    <label for="job_title" class="form-control international-inputmask">{{ __('Job Sector') }}</label>
                    <div class="form-control international-inputmask">
                        <select id="job_title" type="text" class="form-control international-inputmask @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required autocomplete="job_title" autofocus>
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
                        @error('job_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
        
                <div class="form-group">
                    <label>Short Description on Job</label>
                    <textarea type="text" class="form-control international-inputmask" name="short_description" placeholder="short_description"></textarea>
                </div>
                <div class="form-group">
                    <label>Phone </label>
                    <input type="text" class="form-control xphone-inputmask" name="phone" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>Skills Requirements</label>
                    <textarea type="text" class="form-control purchase-inputmask" name="skills_requirements" placeholder="briefly elucidate the skills and requirements necessary"></textarea>
                </div>
                <div class="form-group">
                    <label for="highest_qualification" class="form-control international-inputmask">{{ __('Highest_Qualification ') }}</label>
                      <div class="form-control international-inputmask">
                            <select id="highest_qualification" type="text" class="form-control @error('highest_qualification') is-invalid @enderror" name="highest_qualification" required autocomplete="highest_qualification" autofocus>
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
                        @error('highest_qualification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
                
           <div class="form-group ">
            <label for="Years of Experience" class="form-control international-inputmask">{{ __('Years of Experience ') }}</label>
            <div class="form-control international-inputmask">
                    <select id="experience" type="number" class="form-control xphone-inputmask @error('firstname') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" autofocus>
                        <option value=''>Years of Experience</option>    
                        <option value='Entry Level'>Entry Level</option>
                        <option value='1'>1 Year</option>
                                @for($x=2;$x<=31;$x++)
                                    <option value='{{$x}}'>{{$x}} Years</option>
                                @endfor
                        </select>
                @error('experience')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group ">
            <label for="salary" class="form-control international-inputmask">{{ __('Salary Range') }}</label>

            <div class="form-control international-inputmask">
                    <select id="salary" type="text" class="form-control international-inputmask @error('salary_range') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>
                            <option value="">Salary Range</option>
                            <option value="NGN35,000 - NGN50,000">NGN35,000 - NGN50,000</option>
                            <option value="NGN50,000 - NGN100,000">NGN50,000 - NGN100,000</option>
                            <option value="NGN100,000 - NGN150,000">NGN100,000 - NGN150,000</option>
                            <option value="NGN150,000 - NGN200,000">NGN150,000 - NGN300,000</option>
                            <option value="NGN300,000 - NGN600,000">NGN300,000 - NGN600,000</option>
                            <option value="NGN600,000 and above">NGN600,000 and above</option>
                            <option value="Null">Leave Blank</option>
                        </select>
                @error('salary')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group ">
            <label for="posted" class="form-control international-inputmask">{{ __('Posted Date For Job') }}</label>
            <div class="form-control international-inputmask">
                <select id="posted" type="text" class="form-control international-inputmask @error('posted') is-invalid @enderror" name="posted" value="{{ old('posted') }}" required autocomplete="posted" autofocus>
                    <option value="">Posted Date For Job</option>
                    <option value="Today">Today</option>
                    <option value="7days">7days</option>
                    <option value="2weeks-4weeks">2weeks-4weeks</option>
                    <option value="3months and above">3months and above</option>
                    <option value="Null">Leave Blank</option>
                </select>
            </div> 
        </div>
        <div class="form-group">
            <label>City & Location</label>
            <input type="text" class="form-control international-inputmask" name="city" placeholder="city">
        </div>
        
        <div class="form-group">
            <label>Due Date</label>
            <input type="date" class="form-control international-inputmask" name="due_date" placeholder="due_date">
        </div>

      <div class="form-group row">
                <label class="col-md-3">File Upload</label>
                <div class="col-md-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile"  name="cover_image" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>
            <div class="pull-right">
            <button type="submit" class="btn btn-success">Submit</button>
           </div>
            <!----end of the form --->
           </div> 

        </div>
        </div>
</form>
</div>
@endsection

@section('scripts')
    
@endsection