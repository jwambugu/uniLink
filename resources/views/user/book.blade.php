@extends('layouts.user')

@section('content')
	@include('inc.navbar')

	<!-- Properties details page start -->
	<div class="properties-details-page content-area view-area">
		<div class="container">
			<div class="row">
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
								<a href="{{ url('/booking') }}/{{ $hostel->id }}" class="btn btn-success pull-right">Book Now</a>
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

					<!-- Location start -->
					<div class="location sidebar-widget">
						<div class="map">
							<div class="main-title-2">
								<h1><span>Location</span></h1>
							</div>
							<div id="map" class="contact-map"></div>
						</div>
					</div>
					<!-- Location end -->

					<!-- Main title -->
					<div class="main-title-2">
						<h1><span>Recently</span> Properties</h1>
					</div>
					<!-- Recently properties start -->
					<div class="row">
						<div class="recently-properties clearfix">
							@foreach($recentHostels as $hostel)
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
									<div class="property">
										<!-- Property img -->
										<a href="properties-details.html" class="property-img">
											<div class="property-tag button alt featured">Book Now</div>
											<div class="property-price">KES {{ number_format($hostel->price) }}</div>

											<img src="{{ asset('/storage/hostel_images') }}/{{ $hostel->images->first()->image }}" alt="properties-1" class="img-responsive">



										</a>
										<!-- Property content -->
										<div class="property-content">
											<!-- title -->
											<h1 class="title">
												<a href="properties-details.html">{{ $hostel->name }}</a>
											</h1>
											<!-- Property address -->
											<h3 class="property-address">
												<a href="properties-details.html">
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
                                        <a href="#">
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
					<!-- Recently properties end -->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<!-- Sidebar start -->
					<div class="sidebar right">
						<!-- Search contents sidebar start -->
						<div class="sidebar-widget hidden-sm hidden-xs">
							<div class="main-title-2">
								<h1><span>Advanced</span> Search</h1>
							</div>

							<form method="GET">
								<div class="form-group">
									<select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Property Status</option>
										<option>For Sale</option>
										<option>For Rent</option>
									</select>
								</div>
								<div class="form-group">
									<select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Location</option>
										<option>United States</option>
										<option>United Kingdom</option>
										<option>American Samoa</option>
										<option>Belgium</option>
										<option>Cameroon</option>
										<option>Canada</option>
									</select>
								</div>

								<div class="form-group">
									<select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
										<option>Property Types</option>
										<option>Residential</option>
										<option>Commercial</option>
										<option>Land</option>
									</select>
								</div>

								<div class="form-group">
									<select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
										<option>Area From</option>
										<option>1000</option>
										<option>800</option>
										<option>600</option>
										<option>400</option>
										<option>200</option>
										<option>100</option>
									</select>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<select class="selectpicker search-fields" name="bedrooms">
												<option>Bedrooms</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<select class="selectpicker search-fields" name="bathroom">
												<option>Bathroom</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<select class="selectpicker search-fields" name="balcony">
												<option>Balcony</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<select class="selectpicker search-fields" data-live-search="true" name="garage">
												<option>Garage</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div>

								<div class="range-slider">
									<label>Area</label>
									<div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
									<div class="clearfix"></div>
								</div>

								<div class="range-slider">
									<label>Price</label>
									<div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
									<div class="clearfix"></div>
								</div>

								<div class="form-group">
									<button class="search-button">Search</button>
								</div>
							</form>
						</div>
						<!-- Search contents sidebar end -->

						<!-- Social media start -->
						<div class="social-media sidebar-widget clearfix">
							<!-- Main Title 2 -->
							<div class="main-title-2">
								<h1><span>Social</span> Media</h1>
							</div>
							<!-- Social list -->
							<ul class="social-list">
								<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<!-- Social media end -->

						<!-- Agent widget start -->
						<div class="sidebar-widget contact-form agent-widget">
							<div class="main-title-2">
								<h1><span>Message</span> to Dealer</h1>
							</div>
							<form id="agent_form" action="http://template.themevessel.com/the-nest/index.html" method="GET" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group enter-email">
											<input type="email" name="email" class="input-text" placeholder="Your Email">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group number">
											<input type="text" name="phone" class="input-text"  placeholder="Your Phone">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group message">
											<textarea class="input-text" name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" class="button-md button-theme btn-block">Send Message</button>
									</div>
								</div>
							</form>
						</div>
						<!-- Agent widget end -->

						<!-- Helping center start -->
						<div class="sidebar-widget helping-box clearfix">
							<div class="main-title-2">
								<h1><span>Helping</span> Center</h1>
							</div>
							<div class="helping-center">
								<div class="icon"><i class="fa fa-map-marker"></i></div>
								<h4>Address</h4>
								<span>123 Kathal St. Tampa City,</span>
							</div>
							<div class="helping-center">
								<div class="icon"><i class="fa fa-phone"></i></div>
								<h4>Phone</h4>
								<p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
							</div>
						</div>
						<!-- Helping center end -->

						<!-- Latest tweet start -->
						<div class="sidebar-widget latest-tweet">
							<div class="main-title-2">
								<h1><span>Latest</span> Tweet</h1>
							</div>
							<p><a href="#">@Lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum </p>
							<p>@Lorem ipsum dolor<a href="#">sit amet, consectetur</a> adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum quis orci </p>
						</div>
						<!-- Latest tweet end -->
					</div>
					<!-- Sidebar end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Properties details page end -->
@endsection

@section('scripts')
	<script>
		let map;
		function initMap() {
			//lat: -0.3211,
			// lng: 37.6568
			let latitude = {!! $hostel->latitude !!};
			let longitude = {{ $hostel->longitude }};

			let hostel = {
				lat: latitude,
				lng: longitude
			};
			map = new google.maps.Map(document.getElementById('map'), {
				center: hostel,
				zoom: 15
			});

			let marker = new google.maps.Marker({
				position: hostel,
				map: map
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg4OlHqJizgas6fsATdn868ZYDQcWLXD4&callback=initMap"
	        async defer></script>
@endsection