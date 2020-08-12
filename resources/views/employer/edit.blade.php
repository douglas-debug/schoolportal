@extends('layouts.masters')

@section('title')
   Employer Edit| funda of web IT
@endsection

@section('page-wrapper')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Wizard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title">Basic Form Example</h4>
                <h6 class="card-subtitle"></h6>

            
                        <form action="{{ route('employer.update',$employer->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                        <div>
                        <h3>Account</h3>
                        <section>
                            <label for="email">Email *</label>
                            <input id="email" name="email" value="{{ $employer->email }}" class="required email form-control">

                            <label for="password">Password *</label>
                            <input id="password" name="password" value="{{ $employer->password }}" class="required form-control">

                            <label for="confirm">Confirm Password *</label>
                            <input id="confirm" name="confirm" value="{{ $employer->password }}" class="required form-control">
                            <p>(*) Mandatory</p>
                        </section>
                        <h3>Profile</h3>
                        <section>
                        <label for="firstname">First name *</label>
                        <input id="firstname" name="firstname" value="{{ $employer->firstname }}" class="required form-control">

                            <label for="secondname">Second name *</label>
                            <input id="secondname" name="secondname" value="{{ $employer->secondname }}" class="required form-control">

                            <label for="lastname">Last name *</label>
                            <input id="lastname" name="lastname" value="{{ $employer->lastname }}" class="required form-control">

                            

                            <label for="age">Age</label>
                            <input id="age" name="age" value="{{ $employer->age }}" class=" form-control">

                            <label for="number">Contact Number *</label>
                            <input id="number" name="number" value="{{ $employer->number }}" class="required form-control">
                            <p>(*) Mandatory</p>
                        </section>
                        <h3>Profile 2</h3>
                        <section>       
                                    <label for="address">Address*</label>
                                    <input id="address" name="address" value="{{ $employer->address }}" class="required form-control">
        
                                    <label for="companyname">Company Name *</label>
                                    <input id="companyname" name="companyname" value="{{ $employer->companyname }}" class="required form-control">
        
                                    <label for="country">Country *</label>
                                    <input id="country" name="country" value="{{ $employer->country }}" class="required form-control">
        
                                    <label for="reference">Reference *</label>
                                    <input id="reference" name="reference" value="{{ $employer->reference }}" class=" form-control">

                                    <label for="purpose">Purpose Of Using This Account* </label>
                                   <textarea class="form-control" id="purpose" name="purpose" value="{{ $employer->purpose }}"></textarea>
                                    <p>(*) Mandatory</p>
                                    
                        </section>
                        <h3>Finish</h3>
                        <section>
                            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                            <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                           
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/employer" class="btn btn-danger">Cancel</a>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection