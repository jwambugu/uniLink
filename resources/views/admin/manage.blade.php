@extends('layouts.admin')

@section('content')
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<center>
						<div class="box-header with-border">
							<h3 class="box-title">Hostel Manager</h3>
						</div>
					</center>
					<div class="row">
						<div class="col-md-6 col-md-offset-8">
							<form action="{{ route('admin.manage') }}" method="post">
								<div class="form-group col-sm-6">
									<input type="search" name="ownerID" id="ownerID" class="form-control" placeholder="Search by OwnerID">
								</div>
								{{ csrf_field() }}
								<button type="submit" class="btn btn-primary">Search</button>
							</form>
						</div>
					</div>
					<!-- /.box-header -->
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Owner ID</th>
								<th>Name</th>
								<th>Total Rooms</th>
								<th>Booked Units</th>
								<th>Remaining Units</th>
								<th>Rent</th>
							</tr>
							@foreach($hostels as $hostel)
								<tr>
									<td>{{ $hostel->ownerID }}</td>
									<td>{{ $hostel->name }}</td>
									<td>
										<span class="label label-primary">{{ $hostel->totalRooms }}</span>
									</td>
									<td>
										<span class="label label-danger">{{ $hostel->bookedUnits }}</span>
									</td>
									<td>
										<span class="label label-success">{{ $hostel->totalRooms - $hostel->bookedUnits }}</span>
									</td>
									<td>KES {{ $hostel->price }}</td>
								</tr>
							@endforeach
						</table>
						<div class="pull-right">
							{{ $hostels->links() }}
						</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
			<!--/.col (left) -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
@endsection