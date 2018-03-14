<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>UniLink</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

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

{{--content--}}
@yield('content')
@include('inc.footer')
<script type="text/javascript" src="{{ asset('nest/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
@include('sweet::alert')
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
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
@yield('scripts')
</body>
</html>