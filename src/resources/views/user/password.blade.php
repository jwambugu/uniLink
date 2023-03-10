@extends('layouts.auth')

@section('content')
	@include('inc.navbar')

	<!-- My profile start -->
	<div class="content-area my-profile">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<!-- User account box start -->
				@include('inc.sideNav')
				<!-- User account box end -->
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12">
					<!-- My address start-->
					<div class="my-address">
						<div class="main-title-2">
							<h1><span>Update</span> Password</h1>
						</div>

						<form action="{{ route('user.password') }}" method="post">
							<div class="form-group {{ $errors->has('currentPassword') ? ' has-error' : '' }}">
								<label>Current Password</label>
								<input type="password" class="input-text" name="currentPassword" placeholder="Current Password">
								@if ($errors->has('currentPassword'))
									<span class="help-block">
                                        <strong>{{ $errors->first('currentPassword') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('newPassword') ? ' has-error' : '' }}">
								<label>New Password</label>
								<input type="password" class="input-text" name="newPassword" placeholder="New Password">
								@if ($errors->has('newPassword'))
									<span class="help-block">
                                        <strong>{{ $errors->first('newPassword') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('confirmPassword') ? ' has-error' : '' }}">
								<label>Phone</label>
								<input type="password" class="input-text" name="confirmPassword" placeholder="Confirm Password">
								@if ($errors->has('confirmPassword'))
									<span class="help-block">
                                        <strong>{{ $errors->first('confirmPassword') }}</strong>
                                    </span>
								@endif
							</div>
							{{ csrf_field() }}
							<button type="submit" class="btn button-md button-theme pull-right">Update Password</button>
						</form>
					</div>
					<!-- My address end -->
				</div>
			</div>
		</div>
	</div>
	<!-- My profile end -->
@endsection