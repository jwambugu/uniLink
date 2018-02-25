@extends('layouts.admin')

@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-aqua">
						<div class="widget-user-image">
							<img class="img-circle" src="{{ asset('img/grap.png') }}" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h2 class="widget-user-username">
							{{ $hostel->name }}
						</h2>
						<h5 class="widget-user-desc text-justify">
							{{ $hostel->description }}
						</h5>
					</div>
					<div class="box-footer no-padding">
						<div class="row">
							<div class="col-md-6">
								<ul class="nav nav-stacked">
									<li>
										<a href="#">Total Rooms <span class="pull-right badge bg-blue">{{ $hostel->totalRooms }}</span></a>
									</li>
									<li>
										<a href="#">Booked Units <span class="pull-right badge bg-red">{{ $hostel->bookedUnits }}</span></a>
									</li>
									<li>
										<a href="#">Remaining Units <span class="pull-right badge bg-green">{{ $hostel->totalRooms - $hostel->bookedUnits }}</span></a>
									</li>
									<li>
										<a href="#">Rent <span class="pull-right badge bg-yellow">KES {{ number_format($hostel->price) }}</span></a>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="nav nav-stacked">
									<li>
										<a href="#">Hostel ID <span class="pull-right">{{ $hostel->ownerID }}</span></a>
									</li>
									<li>
										<a href="#">Owner Phone Number <span class="pull-right">{{ $hostel->contact }}</span></a>
									</li>
									<li>
										<a href="#">Deposit Amount <span class="pull-right">KES {{ $hostel->deposit }}</span></a>
									</li>
									<li>
										<a href="#">Bank Account <span class="pull-right">{{ $hostel->account }}</span></a>
									</li>
								</ul>
							</div>
						</div>
						<h3 class="text-center" style="color: #000000">
							Rooms Data
						</h3>
						@foreach($hostel->rooms as $room)
							<div class="row">
								<div class="col-md-6">
									<ul class="nav nav-stacked">
										<li>
											<a href="#">Rooms Type <span class="pull-right">{{ $room->roomType }}</span></a>
										</li>
										<li>
											<a href="#">Rooms Category <span class="pull-right">{{ $room->roomCategory }}</span></a>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="nav nav-stacked">
										<li>
											<a href="#">Electricity Bill Payment <span class="pull-right">{{ $room->electricityBill }}</span></a>
										</li>
										<li>
										<li>
											<a href="#">Water Bill Payment <span class="pull-right">{{ $room->waterBill }}</span></a>
										</li>
									</ul>
								</div>
							</div>
						@endforeach
						<h3 class="text-center" style="color: #000000">
							Hostel's Images
						</h3>
						@foreach($hostel->images->chunk(3) as $chunk)
							<div class="row">
								@foreach($chunk as $image)
									<div class="col-md-4">
										<center>
											<img src="/storage/hostel_images/{{$image->image}}" alt="Hostel image" width="100%" height="250" class="img-responsive img-rounded">
										</center>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	{{--{{ $hostel->images }}--}}
@endsection