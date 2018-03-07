<!-- Footer start -->
<footer class="main-footer clearfix">
	<div class="container">
		<!-- Footer top -->
		<div class="footer-top">
			<div class="row">
				<div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
					<div class="logo-2">
						<a href="{{ url('/') }}">
							<img src="{{ asset('nest/img/logos/footer-logo.png') }}" alt="footer-logo">
						</a>
					</div>
				</div>
				<div class="col-lg-4  col-md-4 col-sm-5 col-xs-12">
					<form action="#" method="GET">
						<input type="text" class="form-contact" name="email" placeholder="Enter your email">
						<button type="submit" name="submitNewsletter" class="btn btn-default button-small">
							<i class="fa fa-paper-plane"></i>
						</button>
					</form>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<ul class="social-list clearfix">
						<li>
							<a href="#">
								<i class="fa fa-rss"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Footer info-->
		<div class="footer-info">
			<div class="row">
				<!-- About us -->
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="footer-item">
						<div class="main-title-2">
							<h1>Contact Us</h1>
						</div>
						<p>
							We are always here to listen. Just give us a call on an email and we will be gld to help.
						</p>
						<ul class="personal-info">
							<li>
								<i class="fa fa-map-marker"></i>
								Address: 21 - 50505 Kenya
							</li>
							<li>
								<i class="fa fa-envelope"></i>
								Email:
								<a href="
#">info@unilink.com</a>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								Phone:
								<a href="#">+254 700 000 000</a>
							</li>
							<li>
								<i class="fa fa-fax"></i>
								Fax: 061 700 000 000
							</li>
						</ul>
					</div>
				</div>
				<!-- Links -->
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="footer-item">
						<div class="main-title-2">
							<h1>Links</h1>
						</div>
						<ul class="links">
							<li>
								<a href="{{ route('user.welcome') }}">Home</a>
							</li>
							<li>
								<a href="{{ route('user.contact') }}">Hostels</a>
							</li>
							<li>
								<a href="{{ route('user.faq') }}">Faqs</a>
							</li>
							<li>
								<a href="{{ route('user.contact') }}">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Recent cars -->
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="footer-item popular-posts">
						<div class="main-title-2">
							<h1>Popular Hostels</h1>
						</div>
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ asset('nest/img/properties/small-properties-1.jpg') }}" alt="small-properties-1">
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="#">The Unknown</a>
								</h3>
								<p>0750 123 455</p>
								<div class="comments-icon">
									<i class="fa fa-money"></i>KES {{ number_format('7000') }}
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ asset('nest/img/properties/small-properties-2.jpg') }}" alt="small-properties-2">
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="#">The Hub</a>
								</h3>
								<p>0750 321 455</p>
								<div class="comments-icon">
									<i class="fa fa-money"></i>KES {{ number_format('8000') }}
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ asset('nest/img/properties/small-properties-3.jpg') }}" alt="small-properties-3">
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="#">Rayne's</a>
								</h3>
								<p>0750 321 655</p>
								<div class="comments-icon">
									<i class="fa fa-comments"></i>KES {{ number_format('9000') }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
	<div class="container">
		&copy; {{ date('Y') }}
		<a href="#" target="_blank">Artisan</a>.
	</div>
</div>
<!-- Copy end right-->