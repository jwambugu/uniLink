@extends('layouts.auth')

@section('content')
<!-- Top header start -->
@include('inc.header')
<!-- Top header end -->
<!-- Content area start -->
<div class="content-area login-box-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Form content box start -->
				<div class="form-content-box">
					<!-- details -->
					<div class="details">
						<!-- Main title -->
						<div class="main-title">
							<h1><span>Register</span></h1>
						</div>
						<!-- Form start-->
						<form action="{{ route('register') }}" method="POST">
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<input type="text" name="name" class="input-text" placeholder="Your Name" value="{{ old('name') }}">
								@if ($errors->has('name'))
									<span class="help-block text-red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="email" name="email" class="input-text" placeholder="Email Address" value="{{ old('email') }}">
								@if ($errors->has('email'))
									<span class="help-block text-red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" name="password" class="input-text" placeholder="Password" value="{{ old('password') }}">
								@if ($errors->has('email'))
									<span class="help-block text-red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
								<input type="password" name="password_confirmation" class="input-text" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
								@if ($errors->has('password_confirmation'))
									<span class="help-block text-red">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="button-md button-theme btn-block">Register</button>
							</div>

							{{ csrf_field() }}
						</form>
						<!-- Form end-->
					</div>
				<!-- Form content box end -->
			</div>
		</div>
	</div>
</div>
<!-- Content area end -->
@endsection
