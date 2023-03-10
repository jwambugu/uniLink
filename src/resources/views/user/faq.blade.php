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
																<i class="fa fa-plus"></i>Which mode of payment is used to book a hostel?
															</a>
														</h4>
													</div>
													<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>
																We are currently accepting VISA and MaterCard. More modes of payment like MPESA and AIRTEL Money will be added soon.
															</p>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading2">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
																<i class="fa fa-plus"></i>Can I book more than one hostel?
															</a>
														</h4>
													</div>
													<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>
																Yes you can. We understand that a student may book a room for their friend. All you need is an agreement with the hostel owner on who will be staying in that particular room.
															</p>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading3">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
																<i class="fa fa-plus"></i> Can I pay all the amount at once?
															</a>
														</h4>
													</div>
													<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>
																Yes you can. The amount will be charged directly from your bank account. Just make sure you have enough funds in your bank wallet.
															</p>
															<hr>
															<span>Was this answer helpful? <a href="#">Yes</a> <a href="#">No</a></span>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading4">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false">
																<i class="fa fa-plus"></i> I am not a student at Chuka University. Can I book a room?
															</a>
														</h4>
													</div>
													<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>
																The application is only available for students at Chuka University. You will be required to provide a student registration number which will be used to validate you are a student of the institution.
															</p>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading5">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false">
																<i class="fa fa-plus"></i>I don't have an account can I book?
															</a>
														</h4>
													</div>
													<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body panel-body-2">
															<p>
																Unfortunately no. You have to register with us to continue with the booking process.
															</p>
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