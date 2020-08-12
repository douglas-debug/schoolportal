@extends('layouts.app')


@section('content')

<section class="job-bg user-page">
<div class="container  text-center">
<div class="user-account-content">
<div class="user-account job-user-account">
    <h2>Create An Account, {{ __('Employee') }}</h2>
        <!--<ul class="nav nav-tabs text-center" role="tablist">
            <li role="presentation"><a class="active" href="#find-job" aria-controls="find-job" role="tab" data-toggle="tab">Find A Job</a></li>
            <li role="presentation"><a href="#post-job" aria-controls="post-job" role="tab" data-toggle="tab">Post A Job</a></li>
        </ul>-->

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active show" id="find-job">
                <form method="POST" action="{{ route('register') }}" >
                    @csrf

                    <div class="form-group">
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <input type="email" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <input type="password"  id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                    </div>
                    <div class="form-group">
                        <input type="text"  id="mobile-number" class="form-control  @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile-number" placeholder="{{ __('Mobile Number') }}">

                        @error('mobile_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <!-- select -->
                    <select class="form-control" id="city" name="city">
                        <option class="hidden">Select {{ __('City') }}</option>
                        <option name="city" value="London UK">London UK</option>
                        <option name="city" value="Newyork, USA">Newyork, USA</option>
                        <option name="city" value="Seoul, Korea">Seoul, Korea</option>
                        <option name="city" value="Beijing, China">Beijing, China</option>
                        <option name="city" value="Lagos, Nigeria">Lagos, Nigeria</option>
                        <option name="city" value="Ibadan, Nigeria">Ibadan, Nigeria</option>
                        <option name="city" value="Rivers, Nigeria">Rivers, Nigeria</option>
                        <option name="city" value="Abuja, Nigeria">Abuja, Nigeria</option>
                    </select><!-- select -->


                    <div class="checkbox">

                        <label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
                    </div><!-- checkbox -->	
                    <input type="hidden" value="3"  name="usertype" > 
                    
                    <button type="submit" class="btn">{{ __('Register') }}</button>	
                </form>
            </div>
           
        </div>				
</div>
</div><!-- user-login -->	
</div><!-- container -->
</section><!-- signup-page -->
    
@endsection