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
							<h3 class="box-title">Manage Hostel</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('admin.hostelData') }}" method="POST" enctype="multipart/form-data">
						<div class="box-body">
							<div class="row">
							
							</div>
						</div>
						{{csrf_field()}}
						<div class="box-footer">
							<div class="row">

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