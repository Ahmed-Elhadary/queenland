@extends('layouts.app')

@section('content')

<link rel="icon" type="image/png" href="{{ asset('dashboard/login/images/icons/favicon.ico') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/login/css/main.css') }}">
<!--===============================================================================================-->


	<div class="limiter">
		<div class="container-login100 ">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('dashboard/login/images/img-01.png') }}" alt="IMG">
				</div>
                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
					<span class="login100-form-title">
						Admin Register
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
					</div>


				</form>
			</div>
		</div>

    <script src="{{ asset('dashboard/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/login/vendor/bootstrap/js/popper.js') }}"></script>

	<script src="{{ asset('dashboard/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('dashboard/login/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('dashboard/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{ asset('dashboard/login/js/main.js') }}"></script>
@endsection
