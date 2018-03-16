@extends('layouts.auth')

@section('content')
<!-- Top header start -->
@include('inc.header')
<!-- Top header end -->

<!-- Content area start -->
<div class="content-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Form content box start -->
				<div class="form-content-box login-box-top">
					<!-- details -->
					<div class="details">
						<!-- Main title -->
						<div class="main-title">
							<h1><span>Login</span></h1>
						</div>
						<!-- Form start -->
						<form action="{{ route('login') }}" method="POST">
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="email" name="email" class="input-text" placeholder="Email Address" >
								@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" name="password" class="input-text" placeholder="Password">
								@if ($errors->has('password'))
									<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="checkbox">
								<div class="ez-checkbox pull-left">
									<label>
										<input type="checkbox" class="ez-hide" {{ old('remember') ? 'checked' : '' }} name="remember">
										Remember me
									</label>
								</div>
								<a href="{{ route('user.reset') }}" class="link-not-important pull-right">Forgot Password</a>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<button type="submit" class="button-md button-theme btn-block" name="login">Login</button>
							</div>
							{{ csrf_field() }}
						</form>
						<!-- Form end -->
					</div>
					<!-- Footer -->
					<div class="footer">
                        <span>
                            New to UniLink? <a href="{{ route('register') }}">Register</a>
                        </span>
					</div>
				</div>
				<!-- Form content box end -->
			</div>
		</div>
	</div>
</div>
<!-- Content area end -->
@endsection
