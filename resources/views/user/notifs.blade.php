@extends('layouts.auth')

@section('content')
	@include('inc.navbar')
	<!-- My Properties start -->
	<div class="content-area my-properties">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<!-- User account box start -->
				@include('inc.sideNav')
				<!-- User account box end -->
				</div>

				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="main-title-2"><br>
						<h1><span>My</span> Notifs</h1>
					</div>
					@if(count($notifs) > 0)
						@foreach($notifs as $notif)
						<div class="agent-box-big clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 agent-content detail">
								<!-- Title -->
								<h1 class="title">
									<a>{{ $notif->title }}</a>
								</h1>
								<p>{{ $notif->message }}</p>
								<!-- footer -->
								<div class="footer clearfix">
									<div class="pull-right">
										<form action="{{ route('user.notif.read') }}" method="post">
											{{ csrf_field() }}
											<input type="hidden" name="id" value="{{ $notif->id }}">
											<button type="submit" class="btn button-sm button-theme">Mark As Read</button>
										</form>
									</div>
								</div>
							</div>
					</div>
					@endforeach
					@else
						<div class="agent-box-big clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 agent-content detail text-center text-danger">
								<h1>You have <strong>0</strong> notifications.</h1>
							</div>
						</div>
					@endif
				</div>
				<div class="pull-right">
					{{ $notifs->links() }}
				</div>
			</div>
		</div>
	</div>
	<!-- My Properties end -->
@endsection