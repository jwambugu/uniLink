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
						<h3 class="box-title">Add Hostel Rooms and Images</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('admin.hostelData') }}" method="POST" enctype="multipart/form-data">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
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
									<div class="form-group" {{ $errors->has('images') ? 'has-error': '' }}>
										<label for="image">Hostel Images (Max:4)</label>
										<input type="file" name="images[]" id="images" class="form-control" multiple>
										@if ($errors->has('images'))
											<span class="help-block text-red">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
										@endif
									</div>
								</div>
							</div>
						</div>
						{{csrf_field()}}
						<input type="hidden" name="hostelID" value="{{ $hostelID }}">
						<div class="box-footer">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<button type="submit" class="btn btn-primary pull-right">Add Data <i class="fa fa-send"></i></button>
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