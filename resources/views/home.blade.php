@extends('layouts.auth')

@section('content')
	@include('inc.navbar')
	<!-- My Properties start -->
	<div class="content-area my-properties">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<!-- User account box start -->
				@include('inc.sideNav')
				<!-- User account box end -->
				</div>

				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="main-title-2"><br>
						<h1><span>My</span> Hostels</h1>
					</div>
					<!-- table start -->
					<table class="manage-table responsive-table">
						<tbody>

						@foreach($images as $image)
						@endforeach
						@foreach($myHostels as $myHostel)
							<tr>
								<td class="title-container">
									<img src="{{ asset('storage/hostel_images') }}/{{ $image->image }}" alt="my-properties-1" class="img-responsive hidden-xs">
									<div class="title">
										<h4><a href="{{ url('/view') }}/{{ $myHostel->hostel->id }}">{{ $myHostel->hostel->name }}</a></h4>
										<span><i class="fa fa-phone"></i> {{ $myHostel->hostel->contact }}</span>
										<span class="table-property-price">Rent Amount: KES {{ number_format($myHostel->hostel->price) }} / per sem</span>
										<br>
										<span class="table-property-price">Booked On: {{ date('F d, Y', strtotime($myHostel->created_at)) }}</span>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<!-- table end -->
					<div class="pull-right">
						{{ $myHostels->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- My Properties end -->
@endsection
