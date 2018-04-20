@extends('layouts.auth')

@section('content')
	@include('inc.navbar')

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
							<h1 class="text-center"><span>Transaction </span> Summary</h1>
							<hr>
							<!-- Agent box list start -->
							<div class="agent-box-big clearfix">
								<div class="col-lg-6 col-md-6 col-sm-6 agent-box-theme agent-theme">
									<img src="{{ asset('storage/hostel_images') }}/{{ $hostel->images->first()->image }}" alt="agent-1" class="img-responsive">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 agent-content">
									<h1 class="title">
										{{ $hostel->name }}
									</h1>
									<hr>
									<!-- Address list -->
									<ul class="address-list">
										<li>
                                <span>
	                                    <i class="fa fa-tag"></i>Owner ID:
                                </span>
											{{ $hostel->ownerID }}
										</li>
										<li>
                                <span>
                                    <i class="fa fa-mobile"></i>Contact:
                                </span>
											{{ $hostel->contact }}
										</li>
										<li>
                                <span>
                                    <i class="fa fa-money"></i>Deposit:
                                </span>
											KES {{ number_format($hostel->deposit) }}
										</li>
										<li>
                                <span>
                                    <i class="fa fa-money"></i>Rent:
                                </span>
											KES {{ number_format($hostel->price) }}
										</li>
										<li>
                                <span>
                                    <i class="fa fa-bank"></i>Account:
                                </span>
											{{ $hostel->account }}
										</li>
										<li>
                                <span>
                                    <i class="fa fa-hourglass"></i>Available:
                                </span>
											 {{ number_format($hostel->totalRooms - $hostel->bookedUnits) }} Rooms
										</li>
									</ul>
									<hr>
									<!-- btn -->
									<form action="{{ route('user.charge') }}" method="POST">
										{{ csrf_field() }}
										<input type="hidden" name="amount" value="{{ $hostel->deposit * 100 }}">
										<input type="hidden" name="hostelID" value="{{ $hostel->id }}">
										<script
												src="https://checkout.stripe.com/checkout.js" class="stripe-button"
												data-key="{{ env('STRIPE_PUBLISHABLE_KEY') }}"
												data-amount="{{ $hostel->deposit * 100 }}"
												data-name="UniLink"
												data-description="Widget"
												data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
												data-locale="auto"
												data-currency="{{ env('STRIPE_CURRENCY') }}">
										</script>
									</form>
								</div>
							</div>
							<!-- Agent box list end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	{{--<script--}}
			{{--src="https://checkout.stripe.com/checkout.js" class="stripe-button"--}}
			{{--data-key="{{ env('STRIPE_KEY') }}"--}}
			{{--data-amount="999"--}}
			{{--data-name="UniLink"--}}
			{{--data-description="Widget"--}}
			{{--data-image="https://stripe.com/img/documentation/checkout/marketplace.png"--}}
			{{--data-locale="auto">--}}
	{{--</script>--}}
@endsection