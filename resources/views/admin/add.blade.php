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
									<div class="form-group" {{ $errors->has('name') ? 'has-error': '' }}>
										<label for="name">Hostel Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter the hostel name.." value="{{ old('name') }}" required>
										@if ($errors->has('name'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('description') ? 'has-error' : '' }}>
										<label for="description">Hostel Description</label>
										<textarea name="description" id="description" cols="30" rows="2" class="form-control" required>{{ old('description') }}</textarea>
										@if ($errors->has('description'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('totalRooms') ? 'has-error': '' }}>
										<label for="totalRooms">Total Rooms</label>
										<input type="text" class="form-control" id="totalRooms" name="totalRooms" placeholder="Enter the total rooms..." value="{{ old('totalRooms') }}" required>
										@if ($errors->has('totalRooms'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('totalRooms') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('latitude') ? 'has-error': '' }}>
										<label for="latitude">Latitude</label>
										<input type="text" class="form-control" id="latitude" name="latitude" placeholder="Hostel's latitude from Google maps..." value="{{ old('latitude') }}" required>
										@if ($errors->has('latitude'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('longitude') ? 'has-error': '' }}>
										<label for="longitude" >Longitude</label>
										<input type="text" class="form-control" id="longitude" name="longitude" placeholder="Hostel's longitude from Google maps..." value="{{ old('longitude') }}" required>
										@if ($errors->has('longitude'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
										@endif
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group" {{ $errors->has('price') ? 'has-error': '' }}>
										<label for="price">Hostel Rent</label>
										<input type="text" class="form-control" id="price" name="price" placeholder="Enter rent..." value="{{ old('price') }}" required>
										@if ($errors->has('price'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('contact') ? 'has-error': '' }}>
										<label for="contact">Hostel Owner Phone Number</label>
										<input type="text" class="form-control" id="contact" name="contact" placeholder="07xxxxxxxx" value="{{ old('contact') }}" required minlength="10">
										@if ($errors->has('contact'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('deposit') ? 'has-error': '' }}>
										<label for="deposit">Hostel Initial Deposit</label>
										<input type="text" class="form-control" id="deposit" name="deposit" placeholder="Enter deposit..." value="{{ old('deposit') }}" required>
										@if ($errors->has('deposit'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('deposit') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('account') ? 'has-error': '' }}>
										<label for="account">Hostel Bank Account Number</label>
										<input type="text" class="form-control" id="account" name="account" placeholder="12 digits bank account number" value="{{ old('account') }}" required minlength="12">
										@if ($errors->has('account'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-group" {{ $errors->has('bookedUnits') ? 'has-error': '' }}>
										<label for="bookedUnits">Booked Units</label>
										<input type="text" class="form-control" id="bookedUnits" name="bookedUnits" placeholder="Already booked units.." value="{{ old('bookedUnits') }}" required>
										@if ($errors->has('bookedUnits'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('bookedUnits') }}</strong>
                                    </span>
										@endif
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