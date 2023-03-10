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
						<h3 class="box-title">Edit Hostel Data</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('admin.update') }}" method="POST">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group" {{ $errors->has('name') ? 'has-error': '' }}>
										<label for="name">Hostel Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter the hostel name.." value="{{ $hostel->name }}" required>
										@if ($errors->has('name'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('name') ? 'has-error': '' }}>
										<label for="ownerID">Hostel Owner ID</label>
										<input type="text" class="form-control" id="ownerID" name="ownerID" placeholder="Enter the hostel owner ID.." value="{{ $hostel->ownerID }}" required>
										@if ($errors->has('ownerID'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('ownerID') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('description') ? 'has-error' : '' }}>
										<label for="description">Hostel Description</label>
										<textarea name="description" id="description" cols="30" rows="5" class="form-control" required>{{ $hostel->description }}</textarea>
										@if ($errors->has('description'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('totalRooms') ? 'has-error': '' }}>
										<label for="totalRooms">Total Rooms</label>
										<input type="text" class="form-control" id="totalRooms" name="totalRooms" placeholder="Enter the total rooms..." value="{{ $hostel->totalRooms }}" required>
										@if ($errors->has('totalRooms'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('totalRooms') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('latitude') ? 'has-error': '' }}>
										<label for="latitude">Latitude</label>
										<input type="text" class="form-control" id="latitude" name="latitude" placeholder="Hostel's latitude from Google maps..." value="{{ $hostel->latitude }}" required>
										@if ($errors->has('latitude'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('longitude') ? 'has-error': '' }}>
										<label for="longitude" >Longitude</label>
										<input type="text" class="form-control" id="longitude" name="longitude" placeholder="Hostel's longitude from Google maps..." value="{{ $hostel->longitude }}" required>
										@if ($errors->has('longitude'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('price') ? 'has-error': '' }}>
										<label for="price">Hostel Rent</label>
										<input type="text" class="form-control" id="price" name="price" placeholder="Enter rent..." value="{{ $hostel->price }}" required>
										@if ($errors->has('price'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
										@endif
									</div>
								</div>
								<div class="col-sm-6">

									<div class="form-group" {{ $errors->has('contact') ? 'has-error': '' }}>
										<label for="contact">Hostel Owner Phone Number</label>
										<input type="text" class="form-control" id="contact" name="contact" placeholder="07xxxxxxxx" value="{{ $hostel->contact }}" required minlength="10">
										@if ($errors->has('contact'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('deposit') ? 'has-error': '' }}>
										<label for="deposit">Hostel Initial Deposit</label>
										<input type="text" class="form-control" id="deposit" name="deposit" placeholder="Enter deposit..." value="{{ $hostel->deposit }}" required>
										@if ($errors->has('deposit'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('deposit') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('account') ? 'has-error': '' }}>
										<label for="account">Hostel Bank Account Number</label>
										<input type="text" class="form-control" id="account" name="account" placeholder="12 digits bank account number" value="{{ $hostel->account }}" required minlength="12">
										@if ($errors->has('account'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('bookedUnits') ? 'has-error': '' }}>
										<label for="bookedUnits">Booked Units</label>
										<input type="text" class="form-control" id="bookedUnits" name="bookedUnits" placeholder="Already booked units.." value="{{ $hostel->bookedUnits }}" required>
										@if ($errors->has('bookedUnits'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('bookedUnits') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('roomCategory') ? 'has-error': '' }}>
										<label for="roomCategory">Hostel Room Type</label>
										<select id="roomCategory" name="roomCategory" class="form-control">
											<option disabled selected>-- Choose the Room Category --</option>
											<option value="Single Room" >Single Room</option>
											<option value="Bed Sitter" >Bed Sitter</option>
										</select>
										@if ($errors->has('roomCategory'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('roomCategory') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('roomType') ? 'has-error': '' }}>
										<label for="roomType">Hostel Room Category</label>
										<select id="roomType" name="roomType" class="form-control">
											<option disabled selected>-- Choose the Room Type --</option>
											<option value="Single" >Single</option>
											<option value="Double" >Double</option>
											<option value="Others" >Others</option>
										</select>
										@if ($errors->has('roomType'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('roomType') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('electricityBill') ? 'has-error': '' }}>
										<label for="electricityBill">Electricity Bill</label>
										<select id="electricityBill" name="electricityBill" class="form-control">
											<option disabled selected>-- Choose an Option --</option>
											<option value="Paid by the student" >Paid by the student</option>
											<option value="Paid by the landlord" >Paid by the landlord</option>

										</select>
										@if ($errors->has('electricityBill'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('electricityBill') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('waterBill') ? 'has-error': '' }}>
										<label for="waterBill">Water Bill</label>
										<select id="waterBill" name="waterBill" class="form-control">
											<option disabled selected>-- Choose an Option --</option>
											<option value="Paid by the student" >Paid by the student</option>
											<option value="Paid by the landlord" >Paid by the landlord</option>

										</select>
										@if ($errors->has('waterBill'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('waterBill') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="col-sm-6 col-sm-offset-3">
										<button type="submit" class="btn btn-primary btn-block pull-right">Update Hostel Data <i class="fa fa-check"></i></button>
									</div>
								</div>
							</div>
						</div>
						{{csrf_field()}}
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