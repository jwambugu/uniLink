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
							<br> perfect home</h1>
						<a href="#" class="btn button-md button-theme hidden-lg hidden-md">Learn More</a>
						<div class="banner-search-box hidden-xs hidden-sm">
							<!-- Search area start -->
							<div class="search-area">
								<div class="search-area-inner">
									<div class="search-contents ">
										<form method="post">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Area From</option>
														<option>1000</option>
														<option>800</option>
														<option>600</option>
														<option>400</option>
														<option>200</option>
														<option>100</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Property Status</option>
														<option>For Sale</option>
														<option>For Rent</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Property Types</option>
														<option>Residential</option>
														<option>Commercial</option>
														<option>Land</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value">
														<option>Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<div class="range-slider">
														<div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider"
														     aria-disabled="false"></div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
												<div class="form-group">
													<button class="search-button">Search</button>
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

	<!-- Search area start -->
	<div class="search-area hidden-lg hidden-md">
		<div class="container">
			<div class="search-area-inner">
				<div class="search-contents ">
					<form method="GET">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="form-group">
									<select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Area From</option>
										<option>1000</option>
										<option>800</option>
										<option>600</option>
										<option>400</option>
										<option>200</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="form-group">
									<select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Property Status</option>
										<option>For Sale</option>
										<option>For Rent</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="form-group">
									<select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Property Types</option>
										<option>Residential</option>
										<option>Commercial</option>
										<option>Land</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="form-group">
									<select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Bedrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="form-group">
									<select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value">
										<option>Bathrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="form-group">
									<div class="range-slider">
										<div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider"
										     aria-disabled="false"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
								<div class="form-group">
									<button class="search-button">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Search area start -->

	<!-- Featured properties start -->
	<div class="content-area featured-properties">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1>
					<span>Featured</span> Properties</h1>
			</div>
			<div class="row">
				<div class="filtr-container">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
						<div class="property">
							<!-- Property img -->
							<a href="properties-details.html" class="property-img">
								<div class="property-tag button alt featured">Featured</div>
								<div class="property-tag button sale">For Sale</div>
								<div class="property-price">$150,000</div>
								<img src="{{ asset('nest/img/properties/properties-1.jpg') }}" alt="properties-1" class="img-responsive">
							</a>
							<!-- Property content -->
							<div class="property-content">
								<!-- title -->
								<h1 class="title">
									<a href="properties-details.html">Beautiful Single Home</a>
								</h1>
								<!-- Property address -->
								<h3 class="property-address">
									<a href="properties-details.html">
										<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
									</a>
								</h3>
								<!-- Facilities List -->
								<ul class="facilities-list clearfix">
									<li>
										<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
										<span>4800 sq ft</span>
									</li>
									<li>
										<i class="flaticon-bed"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flaticon-monitor"></i>
										<span>TV </span>
									</li>
									<li>
										<i class="flaticon-holidays"></i>
										<span> 2 Baths</span>
									</li>
									<li>
										<i class="flaticon-vehicle"></i>
										<span>1 Garage</span>
									</li>
									<li>
										<i class="flaticon-building"></i>
										<span> 3 Balcony</span>
									</li>
								</ul>
								<!-- Property footer -->
								<div class="property-footer">
                                    <span class="left">
                                        <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
									<span class="right">
                                        <a href="#">
                                            <i class="fa fa-heart-o icon"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
						<div class="property">
							<!-- Property img -->
							<a href="properties-details.html" class="property-img">
								<div class="property-tag button alt featured">Featured</div>
								<div class="property-tag button sale">For Rent</div>
								<div class="property-price">$150,000</div>
								<img src="{{ asset('nest/img/properties/properties-3.jpg') }}" alt="properties-3" class="img-responsive">
							</a>
							<!-- Property content -->
							<div class="property-content">
								<!-- title -->
								<h1 class="title">
									<a href="properties-details.html">Modern Family Home</a>
								</h1>
								<!-- Property address -->
								<h3 class="property-address">
									<a href="properties-details.html">
										<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
									</a>
								</h3>
								<!-- Facilities List -->
								<ul class="facilities-list clearfix">
									<li>
										<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
										<span>4800 sq ft</span>
									</li>
									<li>
										<i class="flaticon-bed"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flaticon-monitor"></i>
										<span>TV </span>
									</li>
									<li>
										<i class="flaticon-holidays"></i>
										<span> 2 Baths</span>
									</li>
									<li>
										<i class="flaticon-vehicle"></i>
										<span>1 Garage</span>
									</li>
									<li>
										<i class="flaticon-building"></i>
										<span> 3 Balcony</span>
									</li>
								</ul>
								<!-- Property footer -->
								<div class="property-footer">
                                    <span class="left">
                                        <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
									<span class="right">
                                        <a href="#">
                                            <i class="fa fa-heart-o icon"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
						<div class="property">
							<!-- Property img -->
							<a href="properties-details.html" class="property-img">
								<div class="property-tag button alt featured">Featured</div>
								<div class="property-tag button sale">For Sale</div>
								<div class="property-price">$150,000</div>
								<img src="{{ asset('nest/img/properties/properties-4.jpg') }}" alt="properties-4" class="img-responsive">
							</a>
							<!-- Property content -->
							<div class="property-content">
								<!-- title -->
								<h1 class="title">
									<a href="properties-details.html">Sweet Family Home</a>
								</h1>
								<!-- Property address -->
								<h3 class="property-address">
									<a href="properties-details.html">
										<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
									</a>
								</h3>
								<!-- Facilities List -->
								<ul class="facilities-list clearfix">
									<li>
										<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
										<span>4800 sq ft</span>
									</li>
									<li>
										<i class="flaticon-bed"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flaticon-monitor"></i>
										<span>TV </span>
									</li>
									<li>
										<i class="flaticon-holidays"></i>
										<span> 2 Baths</span>
									</li>
									<li>
										<i class="flaticon-vehicle"></i>
										<span>1 Garage</span>
									</li>
									<li>
										<i class="flaticon-building"></i>
										<span> 3 Balcony</span>
									</li>
								</ul>
								<!-- Property footer -->
								<div class="property-footer">
                                    <span class="left">
                                        <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
									<span class="right">
                                        <a href="#">
                                            <i class="fa fa-heart-o icon"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured properties end -->

	<!-- What are you looking for? start -->
	<div class="mrg-btm-100 our-service">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1>
					<span>What are you</span> looking for?</h1>
			</div>

			<div class="row wow">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
					<div class="content">
						<i class="flaticon-apartment"></i>
						<h4>Apartments</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
					<div class="content">
						<i class="flaticon-internet"></i>
						<h4>Houses</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
					<div class="content">
						<i class="flaticon-vehicle"></i>
						<h4>Garages</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
					<div class="content">
						<i class="flaticon-symbol"></i>
						<h4>Commercial</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
			</div>
			<a href="#" class="btn button-md button-theme">Read More</a>
		</div>
	</div>
	<!-- What are you looking for? end -->

	<!-- Recently properties start -->
	<div class="recently-properties mrg-btm-70 chevron-icon">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1>
					<span>Recently</span> Properties</h1>
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
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<!-- Property start -->
								<div class="property">
									<!-- Property img -->
									<a href="properties-details.html" class="property-img">
										<img src="{{ asset('nest/img/properties/properties-3.jpg') }}" alt="properties-3" class="img-responsive">
									</a>
									<!-- Property content -->
									<div class="property-content">
										<!-- title -->
										<h1 class="title">
											<a href="properties-details.html">Modern Family Home</a>
										</h1>
										<!-- Property address -->
										<h3 class="property-address">
											<a href="properties-details.html">
												<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
											</a>
										</h3>
										<!-- Facilities List -->
										<ul class="facilities-list clearfix">
											<li>
												<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
												<span>4800 sq ft</span>
											</li>
											<li>
												<i class="flaticon-bed"></i>
												<span>3 Beds</span>
											</li>
											<li>
												<i class="flaticon-holidays"></i>
												<span> 2 Baths</span>
											</li>
											<li>
												<i class="flaticon-vehicle"></i>
												<span>1 Garage</span>
											</li>
										</ul>
										<!-- Property footer -->
										<div class="property-footer">
                                            <span class="left">
                                                <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
											<span class="right">
                                                <a href="#">
                                                    <i class="fa fa-heart-o icon"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
                                            </span>
										</div>
									</div>
								</div>
								<!-- Property end -->
							</div>
						</div>
						<div class="item">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<!-- Property start -->
								<div class="property">
									<!-- Property img -->
									<a href="properties-details.html" class="property-img">
										<img src="{{ asset('nest/img/properties/properties-1.jpg') }}" alt="properties-1" class="img-responsive">
									</a>
									<!-- Property content -->
									<div class="property-content">
										<!-- title -->
										<h1 class="title">
											<a href="properties-details-4.html">Beautiful Single Home</a>
										</h1>
										<!-- Property address -->
										<h3 class="property-address">
											<a href="properties-details.html">
												<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
											</a>
										</h3>
										<!-- Facilities List -->
										<ul class="facilities-list clearfix">
											<li>
												<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
												<span>4800 sq ft</span>
											</li>
											<li>
												<i class="flaticon-bed"></i>
												<span>3 Beds</span>
											</li>
											<li>
												<i class="flaticon-holidays"></i>
												<span> 2 Baths</span>
											</li>
											<li>
												<i class="flaticon-vehicle"></i>
												<span>1 Garage</span>
											</li>
										</ul>
										<!-- Property footer -->
										<div class="property-footer">
                                            <span class="left">
                                                <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
											<span class="right">
                                                <a href="#">
                                                    <i class="fa fa-heart-o icon"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
                                            </span>
										</div>
									</div>
								</div>
								<!-- Property end -->
							</div>
						</div>
						<div class="item">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<!-- Property start -->
								<div class="property">
									<!-- Property img -->
									<a href="properties-details.html" class="property-img">
										<img src="{{ asset('nest/img/properties/properties-6.jpg') }}" alt="properties-6" class="img-responsive">
									</a>
									<!-- Property content -->
									<div class="property-content">
										<!-- title -->
										<h1 class="title">
											<a href="properties-details.html">Park Avenue</a>
										</h1>
										<!-- Property address -->
										<h3 class="property-address">
											<a href="properties-details.html">
												<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
											</a>
										</h3>
										<!-- Facilities List -->
										<ul class="facilities-list clearfix">
											<li>
												<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
												<span>4800 sq ft</span>
											</li>
											<li>
												<i class="flaticon-bed"></i>
												<span>3 Beds</span>
											</li>
											<li>
												<i class="flaticon-holidays"></i>
												<span> 2 Baths</span>
											</li>
											<li>
												<i class="flaticon-vehicle"></i>
												<span>1 Garage</span>
											</li>
										</ul>
										<!-- Property footer -->
										<div class="property-footer">
                                            <span class="left">
                                                <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
											<span class="right">
                                                <a href="#">
                                                    <i class="fa fa-heart-o icon"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
                                            </span>
										</div>
									</div>
								</div>
								<!-- Property end -->
							</div>
						</div>
						<div class="item">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<!-- Property start -->
								<div class="property">
									<!-- Property img -->
									<a href="properties-details.html" class="property-img">
										<img src="{{ asset('nest/img/properties/properties-2.jpg') }}" alt="properties-2" class="img-responsive">
									</a>
									<!-- Property content -->
									<div class="property-content">
										<!-- title -->
										<h1 class="title">
											<a href="properties-details.html">Sweet Family Home</a>
										</h1>
										<!-- Property address -->
										<h3 class="property-address">
											<a href="properties-details.html">
												<i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
											</a>
										</h3>
										<!-- Facilities List -->
										<ul class="facilities-list clearfix">
											<li>
												<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
												<span>4800 sq ft</span>
											</li>
											<li>
												<i class="flaticon-bed"></i>
												<span>3 Beds</span>
											</li>
											<li>
												<i class="flaticon-holidays"></i>
												<span> 2 Baths</span>
											</li>
											<li>
												<i class="flaticon-vehicle"></i>
												<span>1 Garage</span>
											</li>
										</ul>
										<!-- Property footer -->
										<div class="property-footer">
                                            <span class="left">
                                                <i class="fa fa-calendar-o icon"></i> 5 days ago</span>
											<span class="right">
                                                <a href="#">
                                                    <i class="fa fa-heart-o icon"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
                                            </span>
										</div>
									</div>
								</div>
								<!-- Property end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Partners block end -->

	<!-- Categories strat -->
	<div class="categories">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1>
					<span>Popular</span> Places</h1>
			</div>
			<div class="clearfix"></div>
			<div class="row wow">
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="row">
						<div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
							<div class="category">
								<div class="category_bg_box cat-1-bg">
									<div class="category-overlay">
                                        <span class="category-content">
                                            <span class="category-title">Florida</span>
                                            <br>
                                            <span class="category-subtitle">14 Properties</span>
                                            <br>
                                            <a href="#" class="btn button-sm button-theme">View All</a>
                                        </span>
										<!-- /.category-content -->
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
							<div class="category">
								<div class="category_bg_box cat-2-bg">
									<div class="category-overlay">
                                        <span class="category-content">
                                            <span class="category-title">California</span>
                                            <br>
                                            <span class="category-subtitle">14 Properties</span>
                                            <br>
                                            <a href="#" class="btn button-sm button-theme ">View All</a>
                                        </span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-pad wow fadeInUp delay-04s">
							<div class="category">
								<div class="category_bg_box cat-3-bg">
									<div class="category-overlay">
                                        <span class="category-content">
                                            <span class="category-title">New York</span>
                                            <br>
                                            <span class="category-subtitle">27 Properties</span>
                                            <br>
                                            <a href="#" class="btn button-sm button-theme ">View All</a>
                                        </span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
					<div class="category">
						<div class="category_bg_box category_long_bg cat-4-bg">
							<div class="category-overlay">
                                <span class="category-content">
                                    <span class="category-title">San Francisco</span>
                                    <br>
                                    <span class="category-subtitle">14 Properties</span>
                                    <br>
                                    <a href="#" class="btn button-sm button-theme ">View All</a>
                                </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Categories end-->

	<!-- Pricing tables start -->
	<div class="content-area-5 pricing-tables">
		<div class="container">
			<!-- Main title 2 -->
			<div class="main-title">
				<h1>
					<span>Pricing</span> Tables</h1>
			</div>
			<div class="row">
				<div class="pricing-container margin-top-40">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInLeft delay-03s">
						<div class="plan">
							<div class="price-header">
								<h3>Standard</h3>
								<h1>$19.99</h1>
							</div>
							<div class="plan-features">
								<ul>
									<li>15 Projects</li>
									<li>30GB Storage</li>
									<li>Unilimited Data Transfer</li>
									<li>50 GB Bandwith</li>
									<li>Enhanced Security</li>
								</ul>
								<div class="clearfix"></div>
								<a href="submit-property.html" class="btn button-sm button-theme btn-color">Get Started</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInUp delay-03s">
						<div class="plan featured">
							<div class="listing-badges">
								<span class="featured">Featured</span>
							</div>

							<div class="price-header">
								<h3>Bussiness</h3>
								<h1>$19.99</h1>
							</div>
							<div class="plan-features">
								<ul>
									<li>15 Projects</li>
									<li>30GB Storage</li>
									<li>Unilimited Data Transfer</li>
									<li>50 GB Bandwith</li>
									<li>Enhanced Security</li>
									<li>Unilimited Data</li>
								</ul>
								<a href="submit-property.html" class="btn button-sm button-theme">Get Started</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInRight delay-03s">
						<div class="plan">
							<div class="price-header">
								<h3>Premium</h3>
								<h1>$9.99</h1>
							</div>

							<div class="plan-features">
								<ul>
									<li>15 Projects</li>
									<li>30GB Storage</li>
									<li>Unilimited Data Transfer</li>
									<li>50 GB Bandwith</li>
									<li>Enhanced Security</li>
								</ul>
								<div class="clearfix"></div>
								<a href="submit-property.html" class="btn button-sm button-theme btn-color">Get Started</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-pad wow fadeInRight delay-03s">
						<div class="plan">
							<div class="price-header">
								<h3>Ultimate</h3>
								<h1>$9.99</h1>
							</div>

							<div class="plan-features">
								<ul>
									<li>15 Projects</li>
									<li>30GB Storage</li>
									<li>Unilimited Data Transfer</li>
									<li>50 GB Bandwith</li>
									<li>Enhanced Security</li>
								</ul>
								<div class="clearfix"></div>
								<a href="submit-property.html" class="btn button-sm button-theme btn-color">Get Started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing tables end -->

	<!-- Intro section strat -->
	<div class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<img src="{{ asset('nest/img/logos/logo-2.png') }}" alt="logo-2">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-12">
					<p>lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-12">
					<a href="#" class="btn button-md button-theme hidden-xs">Contact now</a>
					<a href="#" class="btn button-sm button-theme hidden-lg hidden-md hidden-sm">Contact now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Intro section end -->
	@include('inc.footer')
@endsection