@extends('layouts.admin')

@section('content')
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Add Hostel</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('admin.add') }}" method="POST">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">Hostel Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter the hostel name..">
									</div>
									<div class="form-group">
										<label for="description">Hostel Description</label>
										<textarea name="description" id="description" cols="30" rows="2" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<label for="totalRooms">Total Rooms</label>
										<input type="text" class="form-control" id="totalRooms" name="totalRooms" placeholder="Enter the total rooms...">
									</div>
									<div class="form-group">
										<label for="latitude">Latitude</label>
										<input type="text" class="form-control" id="latitude" name="latitude" placeholder="Hostel's latitude from Google maps...">
									</div>
									<div class="form-group">
										<label for="longitude">Longitude</label>
										<input type="text" class="form-control" id="longitude" name="longitude" placeholder="Hostel's longitude from Google maps...">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="price">Hostel Rent</label>
										<input type="text" class="form-control" id="price" name="price" placeholder="Enter rent...">
									</div>
									<div class="form-group">
										<label for="contact">Hostel Owner Phone Number</label>
										<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter phone number...">
									</div>
									<div class="form-group">
										<label for="deposit">Hostel Initial Deposit</label>
										<input type="text" class="form-control" id="deposit" name="deposit" placeholder="Enter deposit...">
									</div>
									<div class="form-group">
										<label for="account">Hostel Bank Account Number</label>
										<input type="text" class="form-control" id="account" name="account" placeholder="Enter account...">
									</div>
									<div class="form-group">
										<label for="bookedUnits">Booked Units</label>
										<input type="text" class="form-control" id="bookedUnits" name="bookedUnits" placeholder="Already booked units..">
									</div>
								</div>
							</div>
						</div>
						{{csrf_field()}}
						<div class="box-footer">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-7">
									<button type="submit" class="btn btn-primary btn-block pull-right">Add Hostel <i class="fa fa-home"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box -->
			</div>
			<!--/.col (left) -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
@endsection