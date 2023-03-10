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
				<a href="{{ url('/') }}" class="logo">
					<img src="{{ asset('nest/img/logos/logo.png') }}" alt="logo">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse collapse navbar-right" role="navigation" aria-expanded="true" id="app-navigation">
				<ul class="nav navbar-nav">
					<li>
						<a tabindex="0" href="{{ route('user.welcome') }}">Home</a>
					</li>
					<li>
						<a tabindex="0" href="{{ route('login') }}">Login</a>
					</li>
					<li>
						<a tabindex="0" href="{{ route('register') }}">Register</a>
					</li>
				</ul>
			</div>

			<!-- /.navbar-collapse -->
			<!-- /.container -->
		</nav>
	</div>
</header>
<!-- Main header end -->