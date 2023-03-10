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
							<h1><span>Profile</span> Data</h1>
						</div>

						<form action="{{ route('user.profile') }}" method="post">
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<label>Name</label>
								<input type="text" class="input-text" name="name" placeholder="John Antony" value="{{ auth()->user()->name }}">
								@if ($errors->has('name'))
									<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<label>Email Address</label>
								<input type="email" class="input-text" name="email" placeholder="Your email" value="{{ auth()->user()->email }}">
								@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
								<label>Phone</label>
								<input type="text" class="input-text" name="phoneNumber" placeholder="0700 000 000" value="{{ $contact->phoneNumber }}">
								@if ($errors->has('phoneNumber'))
									<span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('creditCard') ? ' has-error' : '' }}">
								<label>Credit Card</label>
								<input type="text" class="input-text" name="creditCard" placeholder="xxxxxxxxxxxxx" value="{{ $contact->creditCard }}">
								@if ($errors->has('creditCard'))
									<span class="help-block">
                                        <strong>{{ $errors->first('creditCard') }}</strong>
                                    </span>
								@endif
							</div>
							{{ csrf_field() }}
							<button type="submit" class="btn button-md button-theme pull-right">Save Changes</button>
						</form>
					</div>
					<!-- My address end -->
				</div>
			</div>
		</div>
	</div>
	<!-- My profile end -->
@endsection