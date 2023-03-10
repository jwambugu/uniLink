@extends('layouts.user')

@section('content')
	@include('inc.navbar')

	<!-- Properties details page start -->
	<div class="properties-details-page content-area view-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					@include('inc.sideNav')
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<!-- Header -->
					<div class="heading-properties clearfix sidebar-widget">
						<div class="pull-left">
							<h3>{{ $hostel->name }}</h3>
							<p>
								<i class="fa fa-phone"></i> {{ $hostel->contact }}
							</p>
						</div>
						<div class="pull-right">
							<h3><span>KES {{ number_format($hostel->price) }} per semester</span></h3>
							<h5>
								<a href="{{ route('home') }}" class="btn btn-success pull-right">Go Back</a>
							</h5>
						</div>
					</div>
					<!-- Properties details section start -->
					<div class="sidebar-widget mrg-btm-40">
						<!-- Properties detail slider start -->
						<div class="properties-detail-slider simple-slider mrg-btm-40 ">
							<div id="carousel-custom" class="carousel slide" data-ride="carousel">
								<div class="carousel-outer">
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="{{ asset('/storage/hostel_images/default.jpg') }}" class="thumb-preview" alt="Hostel Image">
										</div>
										@foreach($hostel->images as $image)
											<div class="item">
												<img src="{{ asset('/storage/hostel_images/') }}/{{ $image->image }}" class="thumb-preview" alt="Hostel Image">
											</div>
										@endforeach
									</div>
									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
						<!-- Properties detail slider end -->

						<!-- Properties description start -->
						<div class="properties-description mrg-btm-40 ">
							<div class="main-title-2">
								<h1><span>Hostel Description</span></h1>
							</div>
							<p class="text-justify">{{ $hostel->description }}</p>
						</div>
						<!-- Properties description end -->

						<!-- Properties condition start -->
						<div class="properties-condition mrg-btm-40 ">
							<div class="main-title-2">
								<h1><span>Hostel Status</span></h1>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<ul class="condition">
										<li>
											<i class="fa fa-home"></i> {{ $hostel->bookedUnits }} Booked
										</li>
										<li>
											<i class="fa fa-bed"></i> {{ $hostel->totalRooms - $hostel->bookedUnits }} Remaining
										</li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<ul class="condition">
										<li>
											<i class="fa fa-building"></i> {{ $hostel->totalRooms }} Rooms
										</li>
										<li>
											<i class="fa fa-money"></i> KES {{ $hostel->deposit }} Deposit
										</li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<ul class="condition">
										<li>
											<i class="fa fa-bank"></i> {{ $hostel->account }} Bank Acc.
										</li>
										<li>
											<i class="fa fa-phone"></i> {{ $hostel->contact }}
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Properties condition end -->

						<!-- Properties amenities start -->
						<div class="properties-amenities">
							<div class="main-title-2">
								<h1><span>Rooms Description</span></h1>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<ul class="amenities">
										<li>
											<i class="fa fa-feed"></i> Room Type
										</li>
										<li>
											<i class="fa fa-feed"></i> Room Category
										</li>
										<li>
											<i class="fa fa-flash"></i> Electricity Bill
										</li>
										<li>
											<i class="fa fa-tint"></i> Water Bill
										</li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<ul class="amenities">
										@foreach($hostel->rooms as $room)
											<li>
												{{ $room->roomType }}
											</li>
											<li>
												{{ $room->roomCategory }}
											</li>
											<li>
												{{ $room->electricityBill }}
											</li>
											<li>
												{{ $room->waterBill }}
											</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
						<!-- Properties amenities end -->
					</div>
					<!-- Properties details section end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Properties details page end -->
@endsection

@section('scripts')

@endsection