@extends('layouts.app')


@section('content')


<section class="clearfix job-bg user-page">
		<div class="container text-center">
			<div class="user-account-content">
				<div class="user-account">
					
					<h2>User {{ __('Login') }}</h2>
					<!-- form -->
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="form-group">
								<input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="form-group">
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" >

							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror

						</div>
						<button type="submit" href="#" class="btn">{{ __('Login') }}</button>
					</form><!-- form -->
				
					<!-- forgot-password -->
					<div class="user-option">
						<div class="form-check pull-left">
							 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}, Keep me logged in
                                    </label>
						</div>
						<div class="pull-right forgot-password">
							 @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
						</div>
					</div><!-- forgot-password -->
				</div>
				<a href="/signup" class="btn-primary">Create a New Account</a>
			</div><!-- user-login -->	
		</div><!-- container -->
	</section><!-- signin-page -->
    
@endsection