
@extends('layouts.user')

@section('content')
	@include('inc.navbar')
	<!-- Banner start -->
	<div class="banner">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('nest/img/banner/banner-slider-1.jpg') }}" alt="banner-slider-1">
					<div class="carousel-caption banner-slider-inner banner-top-align text-left">
						<h1 class="hidden-lg hidden-md">Find the
							<br> perfect hostel</h1>
						<a href="#" class="btn button-md button-theme hidden-lg hidden-md">Learn More</a>
						<div class="banner-search-box hidden-xs hidden-sm">
							<!-- Search area start -->
							<div class="search-area">
								<div class="search-area-inner">
									<div class="search-contents ">
										<form action="{{ route('user.advancedSearch') }}" method="post">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="price" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Price From</option>
														<option value="5000">{{ number_format('5000') }}</option>
														<option value="10000">{{ number_format('10000') }}</option>
														<option value="12000">{{ number_format('12000') }}</option>
														<option value="15000">{{ number_format('15000') }}</option>
														<option value="20000">{{ number_format('20000') }} +</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="deposit" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Deposit From</option>
														<option value="5000">{{ number_format('5000') }}</option>
														<option value="6000">{{ number_format('6000') }}</option>
														<option value="7000">{{ number_format('7000') }}</option>
														<option value="9000">{{ number_format('9000') }}</option>
														<option value="10000">{{ number_format('10000') }} +</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="roomType" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Room Type</option>
														<option value="single">Single Room</option>
														<option value="double">Doubles</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="roomCategory" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Room Category</option>
														<option value="single">Single Room</option>
														<option value="bedsitter">Bed Sitter</option>
														<option value="others">Others</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="electricityBill" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Electricity Bill Payment</option>
														<option value="student">Paid by the student</option>
														<option value="landlord">Paid by the landlord</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="waterBill" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Water Bill Payment</option>
														<option value="student">Paid by the student</option>
														<option value="landlord">Paid by the landlord</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
												</div>
											</div>
											{{ csrf_field() }}
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
												<div class="form-group">
													<button type="submit" class="search-button">Search</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- Search area start -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner end -->

	<div class="content-area featured-properties">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1>
					<span>Popular</span> Hostels</h1>
			</div>
			<div class="row">
				<div class="filtr-container">
					@foreach($popularHostels as $hostel)
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
							<div class="property">
								<!-- Property img -->
								<a href="{{ url('/book') }}/{{ $hostel->id }}" class="property-img">
									<div class="property-tag button alt featured">Book Now</div>
									<div class="property-tag button sale">{{ $hostel->totalRooms - $hostel->bookedUnits }} Remaining Rooms </div>
									<div class="property-price">KES {{ number_format($hostel->price) }}</div>

									<img src="{{ asset('/storage/hostel_images') }}/{{ $hostel->images->first()->image }}" alt="properties-1" class="img-responsive">



								</a>
								<!-- Property content -->
								<div class="property-content">
									<!-- title -->
									<h1 class="title">
										<a href="{{ url('/book') }}/{{ $hostel->id }}">{{ $hostel->name }}</a>
									</h1>
									<!-- Property address -->
									<h3 class="property-address">
										<a href="{{ url('/book') }}/{{ $hostel->id }}">
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
                                        <a href="{{ url('/book') }}/{{ $hostel->id }}">
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
		</div>
	</div>
	<!-- Featured properties end -->

	<!-- Pricing tables start -->
	<div class="content-area-5 pricing-tables">
		<div class="container">
			<!-- Main title 2 -->
			<div class="main-title">
				<h1>
					<span>Hostels</span> Pricing</h1>
			</div>
			<div class="row">
				<div class="pricing-container margin-top-40">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInLeft delay-03s">
						<div class="plan">
							<div class="price-header">
								<h3>Standard</h3>
								<h1>KES {{ number_format('10000') }}</h1>
							</div>
							<div class="plan-features">
								<ul>
									<li>2KM Away</li>
									<li>Ample Storage</li>
									<li>Limited Studying Space</li>
									<li>2 MBPS WiFi</li>
									<li>Enhanced Security</li>
								</ul>
								<div class="clearfix"></div>
								<a href="{{ route('user.hostels') }}" class="btn button-sm button-theme btn-color">Get Started</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInUp delay-03s">
						<div class="plan featured">
							<div class="listing-badges">
								<span class="featured">Popular</span>
							</div>

							<div class="price-header">
								<h3>Economical</h3>
								<h1>KES {{ number_format('15000') }}</h1>
							</div>
							<div class="plan-features">
								<ul>
									<li>1.5KM Away</li>
									<li>Ample Storage</li>
									<li>Ample Studying Space</li>
									<li>5 MBPS WiFi</li>
									<li>Enhanced Security</li>
								</ul>
								<a href="{{ route('user.hostels') }}" class="btn button-sm button-theme">Get Started</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInRight delay-03s">
						<div class="plan">
							<div class="price-header">
								<h3>Premium</h3>
								<h1>KES {{ number_format('20000') }}</h1>
							</div>

							<div class="plan-features">
								<ul>
									<li>1KM Away</li>
									<li>Spacious Storage</li>
									<li>Spacious Studying Space</li>
									<li>8 MBPS WiFi</li>
									<li>24 hrs Enhanced Security</li>
								</ul>
								<div class="clearfix"></div>
								<a href="{{ route('user.hostels') }}" class="btn button-sm button-theme btn-color">Get Started</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInRight delay-03s">
						<div class="plan">
							<div class="price-header">
								<h3>Ultimate</h3>
								<h1>KES {{ number_format('25000') }}</h1>
							</div>

							<div class="plan-features">
								<ul>
									<li>&lt; 0.5 KM Away</li>
									<li>Super Spacious Storage</li>
									<li>Large Studying Space</li>
									<li>15 MBPS WiFi</li>
									<li>24 hrs CCTV Security</li>
								</ul>
								<div class="clearfix"></div>
								<a href="{{ route('user.hostels') }}" class="btn button-sm button-theme btn-color">Get Started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing tables end -->

	<!-- Recently properties start -->
	<div class="recently-properties mrg-btm-70 chevron-icon">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1>
					<span>Recent</span> Hostels</h1>
			</div>
			<div class="row">
				<div class="carousel our-partners slide" id="ourPartners2">
					<div class="col-lg-12 mrg-btm-30">
						<a class="right carousel-control" href="#ourPartners2" data-slide="prev">
							<i class="fa fa-chevron-left icon-prev"></i>
						</a>
						<a class="right carousel-control" href="#ourPartners2" data-slide="next">
							<i class="fa fa-chevron-right icon-next"></i>
						</a>
					</div>
					<div class="carousel-inner">
						<div class="item active">
							@foreach($recentHostels as $recentHostel)
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="property">
										<!-- Property img -->
										<a href="{{ url('/book') }}/{{ $recentHostel->id }}" class="property-img">
											<div class="property-tag button alt featured">Book Now</div>
											<div class="property-tag button sale">{{ $recentHostel->totalRooms - $recentHostel->bookedUnits }} Remaining Rooms </div>
											<div class="property-price">KES {{ number_format($recentHostel->price) }}</div>

											<img src="{{ asset('/storage/hostel_images/') }}/{{ $recentHostel->images->first()->image }}" alt="properties-1" class="img-responsive">



										</a>
										<!-- Property content -->
										<div class="property-content">
											<!-- title -->
											<h1 class="title">
												<a href="{{ url('/book') }}/{{ $recentHostel->id }}">{{ $recentHostel->name }}</a>
											</h1>
											<!-- Property address -->
											<h3 class="property-address">
												<a href="{{ url('/book') }}/{{ $recentHostel->id }}">
													<i class="fa fa-phone"></i> {{ $recentHostel->contact }}
												</a>
											</h3>
											<!-- Facilities List -->
											<ul class="facilities-list clearfix">
												<li>
													<i class="fa fa-money"></i>
													<span>KES {{ number_format($recentHostel->deposit) }}</span>
												</li>
												<li>
													<i class="flaticon-bed"></i>
													<span>{{ $recentHostel->totalRooms }} Rooms</span>
												</li>
											</ul>
											<!-- Property footer -->
											<div class="property-footer">
                                    <span class="left">
                                        <i class="fa fa-hashtag"></i> {{ $recentHostel->bookedUnits }} Booked </span>
												<span class="right">
                                        <a href="{{ url('/book') }}/{{ $recentHostel->id }}">
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
				</div>
			</div>
		</div>
	</div>
	<!-- Partners block end -->

	<div class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<img src="{{ asset('nest/img/logos/logo-2.png') }}" alt="logo-2">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-12">
					<p>We got you covered. No more hustle to get a room. Book at your own comfort anywhere, anytime <i class="fa fa-smile-o"></i></p>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-12">
					<a href="{{ route('user.contact') }}" class="btn button-md button-theme hidden-xs">Contact now</a>
					<a href="#" class="btn button-sm button-theme hidden-lg hidden-md hidden-sm">Contact now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Intro section end -->
@endsection
@section('scripts')
	<script>
		$(function () {
			let slider = $('#ranger-slider').val();
			console.log(slider);
		});
	</script>
@endsection
