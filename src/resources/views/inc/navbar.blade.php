@guest
<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="list-inline">
					<a href="tel:1-8X0-666-8X88">
						<i class="fa fa-phone"></i>+254 700 000 000</a>
					<a href="tel:info@themevessel.com">
						<i class="fa fa-envelope"></i>info@unilink.com</a>
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
@endguest
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
					<img src="{{ URL::asset('nest/img/logos/logo.png') }}" alt="logo">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
				@guest
					<ul class="nav navbar-nav">
						<li>
							<a tabindex="0" href="{{ url('/') }}">Home</a>
						</li>
						<li>
							<a tabindex="0" href="{{ route('user.hostels') }}">Hostels</a>
						</li>
						<li>
							<a tabindex="0" href="{{ route('user.faq') }}">FAQs</a>
						</li>
						<li>
							<a tabindex="0" href="{{ route('user.contact') }}">Contact Us</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right rightside-navbar">
						<li>
							<form action="{{ route('user.basicSearch') }}" class="form-inline form-search" method="post">
								<div class="form-group">
									<label class="sr-only" for="search">Search</label>
									<input type="search" class="form-control" id="search" name="search" placeholder="Search">
								</div>
								{{ csrf_field() }}
								<button type="submit" class="btn"><i class="fa fa-search"></i></button>
							</form>
						</li>
					</ul>
					@else
					<?php
					$notifs = count(auth()->user()->notifs->where('status', 0));
					?>
					<ul class="nav navbar-nav navbar-right rightside-navbar">
						<li class="dropdown ">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								<i class="fa fa-envelope-o
								"></i> <span class="badge" style="background-color: #b94a48">{{ $notifs }}</span><span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('user.notifs') }}">
										@if($notifs == 0)
											No Notifs
											@elseif($notifs == 1)
											You have {{ $notifs }} notification
											@else
											You have {{ $notifs }} notifications

										@endif
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
						<li>
							<a tabindex="0" href="{{ route('user.hostels') }}">Book Hostels</a>
						</li>
						<li class="dropdown ">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								{{ auth()->user()->name }}<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('logout') }}"
									   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					</ul>
				@endguest
			</div>

			<!-- /.navbar-collapse -->
			<!-- /.container -->
		</nav>
	</div>
</header>
<!-- Main header end -->