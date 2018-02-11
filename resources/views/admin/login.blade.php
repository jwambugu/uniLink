<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name', 'UniLink') }}::Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/AdminLTE.css') }}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
	
	<style>
		.error{
			color: #ff0000;
			font-size: 0.9em;
			text-align: center;
		}
	</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>UniLink</b> Admin</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>
		
		<form action="{{ route('admin.login') }}" method="post">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Username" name="username" required>
				<i class="fa fa-user-circle form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password" name="password" required>
				<i class="fa fa-lock form-control-feedback"></i>
			</div>
			<div class="row">
				<!-- /.col -->
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
				{{ csrf_field() }}
			</div>
		</form>
	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
@include('sweet::alert')
</body>
</html>
