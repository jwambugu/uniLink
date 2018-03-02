@extends('layouts.user')

@section('content')
	@include('inc.navbar')

	<!-- Faq body start -->
	<div class="faq-body content-area-faq">
		<div class="container">
			<!-- Main title -->
			<div class="main-title">
				<h1><span>Frequently</span> Asked Questions</h1>
			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xm-12">
					<!-- Panel box start -->
					<div class="panel-box">
						{{--<ul class="nav nav-tabs">--}}
							{{--<li class="active"><a href="#generalInformataion" data-toggle="tab" aria-expanded="true">General Information</a></li>--}}
						{{--</ul>--}}
						<div class="panel with-nav-tabs panel-default">
							<div class="panel-body">
								<div class="tab-content">
									<div class="tab-pane fade active in" id="generalInformataion">
										<div class="panel-div">
											<div class="panel-group" role="tablist">
												<div class="panel panel-default">
													<div class="panel-heading active" role="tab" id="heading1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">
																<i class="fa fa-plus"></i>Proin luctus, erat sed pulvinar bibendum
															</a>
														</h4>
													</div>
													<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam. Nam sed aliquet tortor. Sed id malesuada ante. Quisque et sagittis nulla. In ut congue lacus, in malesuada nulla. Proin luctus, erat sed pulvinar bibendum, nisi erat dignissim ante, in imperdiet purus dolor sit amet lectus. Nullam luctus euismod purus, nec consequat tellus luctus pharetra. Morbi ut purus tempor, pellentesque felis eu; mollis nisl. Morbi tincidunt ante ipsum, bibendum pulvinar eros luctus sed. Donec non tincidunt quam. Donec nisl eros, sollicitudin a condimentum eget, iaculis non metus. Curabitur rhoncus elit eu rhoncus molestie. Praesent vitae felis et justo malesuada auctor! Aliquam hendrerit ut sem nec euismod. Curabitur vel interdum dui? Nulla tempor interdum suscipit. Nulla tortor orci, iaculis vel enim id, bibendum rutrum orci.</p>
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading2">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
																<i class="fa fa-plus"></i>Integer pharetra id magna sed laoreet
															</a>
														</h4>
													</div>
													<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading3">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
																<i class="fa fa-plus"></i> Voluptatem remopa accusantium doloremque laudantium
															</a>
														</h4>
													</div>
													<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading4">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false">
																<i class="fa fa-plus"></i>What is required if I sell my vehicle?
															</a>
														</h4>
													</div>
													<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading5">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false">
																<i class="fa fa-plus"></i>Morbi ut purus tempor, pellentesque felis eu
															</a>
														</h4>
													</div>
													<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading6">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false">
																<i class="fa fa-plus"></i>Where do I find an agent?
															</a>
														</h4>
													</div>
													<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade features" id="extraFeatures">
										<div class="panel-div">
											<div class="panel-group" role="tablist">
												<div class="panel panel-default">
													<div class="panel-heading active" role="tab" id="heading7">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false">
																<i class="fa fa-plus"></i>Where do I find an agent?
															</a>
														</h4>
													</div>
													<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading active" role="tab" id="heading8">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false">
																<i class="fa fa-plus"></i>Morbi ut purus tempor, pellentesque felis eu
															</a>
														</h4>
													</div>
													<div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingThree">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																<i class="fa fa-plus"></i>What is required if I sell my vehicle?
															</a>
														</h4>
													</div>
													<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade technical" id="VehicleOverview">
										<div class="panel-div">
											<div class="panel-group" role="tablist">
												<div class="panel panel-default">
													<div class="panel-heading active" role="tab" id="heading9">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false">
																<i class="fa fa-plus"></i>Integer pharetra id magna sed laoreet
															</a>
														</h4>
													</div>
													<div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading10">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false">
																<i class="fa fa-plus"></i>Is the price you quote guaranteed?
															</a>
														</h4>
													</div>
													<div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- Panel box end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Faq body end -->
@endsection