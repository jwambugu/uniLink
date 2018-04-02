@extends('layouts.auth')

@section('content')
	<!-- Top header start -->
	@include('inc.header')
	<!-- Top header end -->

	<!-- Content area start -->
	<div class="content-area password-reset-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
						<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ session('status') }}
						</div>
				@endif
					<!-- Form content box start -->
					<div class="form-content-box">
						<!-- details -->
						<div class="details">
							<!-- Main title -->
							<div class="main-title">
								<h1><span>Reset Password</span></h1>
							</div>
							<!-- Form start -->
							<form action="{{ route('password.email') }}" method="POST">
								<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="email" name="email" class="input-text" placeholder="Email Address" value="{{ old('email') }}" >
									@if ($errors->has('email'))
										<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									@endif
								</div>
								<div class="form-group">
									<button type="submit" class="button-md button-theme btn-block">Send Reset Link</button>
								</div>
								{{ csrf_field() }}
							</form>
							<!-- Form end -->
						</div>
						<div class="footer">
                        <span>
                            Remembered Password? <a href="{{ route('login') }}">Login</a>
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
