<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>UniLink</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<!-- External CSS libraries -->
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/bootstrap-submenu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/bootstrap-select.min.css') }}">
	<link rel="stylesheet" href="{{ asset('nest/css/leaflet.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('nest/css/map.css') }}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/fonts/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/fonts/linearicons/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/jquery.mCustomScrollbar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/dropzone.css') }}">

	<!-- Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/style.css') }}">
	<link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('nest/css/skins/default.css') }}">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="{{ asset('nest/img/favicon.ico') }}" type="image/x-icon">

	<!-- Google fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link rel="stylesheet" type="text/css" href="{{ asset('nest/css/ie10-viewport-bug-workaround.css') }}">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script type="text/javascript" src="{{ asset('nest/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
	<script type="text/javascript" src="{{ asset('nest/js/ie-emulation-modes-warning.js') }}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{ asset('nest/js/html5shiv.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('nest/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>
<!-- <div class="page_loader"></div> -->

<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="list-inline">
					<a href="tel:1-8X0-666-8X88">
						<i class="fa fa-phone"></i>10700 000 000</a>
					<a href="tel:info@themevessel.com">
						<i class="fa fa-envelope"></i>info@example.com</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<ul class="top-social-media pull-right">
					<li>
						<a href="{{ route('login') }}" class="sign-in">
							<i class="fa fa-sign-in"></i> Login</a>
					</li>
					<li>
						<a href="{{ route('register') }}" class="sign-in">
							<i class="fa fa-user"></i> Register</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="logo">
					<img src="{{ asset('nest/img/logos/logo.png') }}" alt="logo">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
				<ul class="nav navbar-nav">
					<li class="active">
						<a tabindex="0" href="#">Home</a>
					</li>
					<li>
						<a tabindex="0" href="/properties-list-leftside.html">Properties</a>
					</li>
					<li>
						<a tabindex="0" href="/faq.html">FAQs</a>
					</li>
					<li>
						<a tabindex="0" href="/contact.html">Contact Us</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right rightside-navbar">
					<li>
						<form class="form-inline form-search" method="GET">
							<div class="form-group">
								<label class="sr-only" for="textsearch2">Search</label>
								<input type="text" class="form-control" id="textsearch2" placeholder="Search">
							</div>
							<button type="submit" class="btn"><i class="fa fa-search"></i></button>
						</form>
					</li>
				</ul>
			</div>

			<!-- /.navbar-collapse -->
			<!-- /.container -->
		</nav>
	</div>
</header>
<!-- Main header end -->

{{--content--}}
@yield('content')
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
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printing and
							typesetting
						</p>
						<ul class="personal-info">
							<li>
								<i class="fa fa-map-marker"></i>
								Address: 20/F Green Road, Dhanmondi, Dhaka
							</li>
							<li>
								<i class="fa fa-envelope"></i>
								Email:
								<a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								Phone:
								<a href="tel:+55-417-634-7071">+55 4XX-634-7071</a>
							</li>
							<li>
								<i class="fa fa-fax"></i>
								Fax: +55 4XX-634-7071
							</li>
						</ul>
					</div>
				</div>
				<!-- Links -->
				<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<div class="footer-item">
						<div class="main-title-2">
							<h1>Links</h1>
						</div>
						<ul class="links">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About Us</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
							<li>
								<a href="blog-single.html">Blog</a>
							</li>
							<li>
								<a href="properties-list-rightside.html">properties Listing</a>
							</li>
							<li>
								<a href="properties-grid-rightside.html">properties Grid</a>
							</li>
							<li>
								<a href="properties-details.html">properties Details</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Tags -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-item tags-box">
						<div class="main-title-2">
							<h1>Tags</h1>
						</div>
						<ul class="tags">
							<li>
								<a href="#">Image</a>
							</li>
							<li>
								<a href="#">Features</a>
							</li>
							<li>
								<a href="#">Typography</a>
							</li>
							<li>
								<a href="#">Gallery</a>
							</li>
							<li>
								<a href="#">Slideshow</a>
							</li>
							<li>
								<a href="#">Post Formats</a>
							</li>
							<li>
								<a href="#">Sellers</a>
							</li>
							<li>
								<a href="#">WooCommerce</a>
							</li>
							<li>
								<a href="#">Shortcodes</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Recent cars -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-item popular-posts">
						<div class="main-title-2">
							<h1>popular posts</h1>
						</div>
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ asset('nest/img/properties/small-properties-1.jpg') }}" alt="small-properties-1">
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="#">Modern Design Building</a>
								</h3>
								<p>21 October, 2016</p>
								<div class="comments-icon">
									<i class="fa fa-comments"></i>45 comments
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ asset('nest/img/properties/small-properties-2.jpg') }}" alt="small-properties-2">
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="#">Real Estate Expo 2016</a>
								</h3>
								<p>10 October, 2016</p>
								<div class="comments-icon">
									<i class="fa fa-comments"></i>32 comments
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ asset('nest/img/properties/small-properties-3.jpg') }}" alt="small-properties-3">
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="#">Construction and Development</a>
								</h3>
								<p>10 October, 2016</p>
								<div class="comments-icon">
									<i class="fa fa-comments"></i>58 comments
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

<script type="text/javascript" src="{{ asset('nest/js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/bootstrap-submenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/rangeslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/jquery.mb.YTPlayer.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/jquery.scrollUp.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/leaflet-providers.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/leaflet.markercluster.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/jquery.filterizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/maps.js') }}"></script>
<script type="text/javascript" src="{{ asset('nest/js/app.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="{{ asset('nest/js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- Custom javascript -->
<script type="text/javascript" src="{{ asset('nest/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>