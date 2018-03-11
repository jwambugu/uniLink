@extends('layouts.user')

@section('content')
	<!-- Featured properties start -->
	<div class="content-area-book featured-properties">
		<div class="container">
			<!-- Main title -->
			<div class="main-title title-top">
				<h1>
					<span>Available</span> Hostels</h1>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<!-- Option bar start -->
					<div class="option-bar">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-2">
								<h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
									<span class="hidden-xs">All Hostels</span>
								</h4>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 cod-pad">
								<div class="sorting-options">
									<select class="sorting">
										<option>New To Old</option>
										<option>Old To New</option>
										<option>Properties (High To Low)</option>
										<option>Properties (Low To High)</option>
									</select>
									<a href="#" class="change-view-btn"><i class="fa fa-th-list"></i></a>
									<a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Option bar end -->
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="row">
				<div class="filtr-container">
					@foreach($hostels as $hostel)
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
							<div class="property">
								<!-- Property img -->
								<a class="property-img" href="{{ url('/book') }}/{{ $hostel->id }}">
									<div class="property-tag button alt featured ">Book Now</div>
									<div class="property-tag button sale">{{ $hostel->totalRooms - $hostel->bookedUnits }} Remaining Rooms </div>
									<div class="property-price">KES {{ number_format($hostel->price) }}</div>

									<img src="/storage/hostel_images/{{ $hostel->images->first()->image }}" alt="properties-1" class="img-responsive">
								</a>
								<!-- Property content -->
								<div class="property-content">
									<!-- title -->
									<h1 class="title">
										<a href="{{ url('/book') }}/{{ $hostel->id }}">{{ $hostel->name }}</a>
									</h1>
									<!-- Property address -->
									<h3 class="property-address">
										<a href="#">
											<i class="fa fa-phone"></i> {{ $hostel->contact }}
										</a>
									</h3>
									<!-- Facilities List -->
									<ul class="facilities-list clearfix">
										<li>
											<i class="fa fa-money"></i>
											<span>KES {{ number_format($hostel->deposit) }}</span>
										</li>
										<li>
											<i class="flaticon-bed"></i>
											<span>{{ $hostel->totalRooms }} Rooms</span>
										</li>
										<li>
											<i class="flaticon-monitor"></i>
											<span>TV </span>
										</li>
									</ul>
									<!-- Property footer -->
									<div class="property-footer">
                                    <span class="left">
                                        <i class="fa fa-hashtag"></i> {{ $hostel->bookedUnits }} Booked </span>
										<span class="right">
                                        <a href="/book/{{ $hostel->id }}">
	                                        Book Now <i class="fa fa-key"></i>
                                        </a>
                                    </span>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="row">
				<div class="pull-right">
					{{ $hostels->links() }}
				</div>
			</div>
		</div>
	</div>
	<!-- Featured properties end -->
@endsection