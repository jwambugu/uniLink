@extends('layouts.user')

@section('content')
	@include('inc.navbar')

	<!-- Contact body start -->
	<div class="contact-body content-area content-area-faq">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
					<!-- Contact form start -->
					<div class="contact-form">
						<div class="main-title-2">
							<h1><span>Contact</span> Us</h1>
						</div>
						<form id="contact_form" action="#" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group fullname">
										<input type="text" name="full-name" class="input-text" placeholder="Full Name" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group enter-email">
										<input type="email" name="email" class="input-text" placeholder="Enter email" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group subject">
										<input type="text" name="subject" class="input-text" placeholder="Subject" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group number">
										<input type="text" name="phone" class="input-text" placeholder="Phone Number" required>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									<div class="form-group message">
										<textarea class="input-text" name="message" placeholder="Write message" required></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group send-btn">
										<button type="submit" class="button-md button-theme">Send Message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Contact form end -->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<!-- Contact details start -->
					<div class="contact-details">
						<div class="main-title-2">
							<h1><span>Our</span> Addresses</h1>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="media-body">
								<h4>Office Address</h4>
								<p>21 - 50505</p>
								<p>Central St. 1766</p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-phone"></i>
							</div>
							<div class="media-body">
								<h4>Phone Number</h4>
								<p>
									<a href="#">Office: +254 700 000 000</a>
								</p>
								<p>
									<a href="#">Mobile: +254 700 000 000</a>
								</p>
							</div>
						</div>
						<div class="media mrg-btm-0">
							<div class="media-left">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="media-body">
								<h4>Email Address</h4>
								<p>
									<a href="#">info@unilink.com</a>
								</p>
								<p>
									{{--<a href="{{ url('/') }}" target="_blank">http://themevessel.com</a>--}}
								{{--</p>--}}
							</div>
						</div>
					</div>
					<!-- Contact details end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Contact body end -->
@endsection