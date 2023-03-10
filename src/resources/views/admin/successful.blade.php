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
							<h3 class="box-title">Successful Transactions</h3>
						</div>
					</center>
					<div class="row">
						<div class="col-md-6 col-md-offset-8">
							<form action="" method="post">
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
							<thead>
								<tr>
									<th>Stripe ID</th>
									<th>Student Reg. NO</th>
									<th>Hostel Name</th>
									<th>Paid Amount</th>
									<th>Payment Date</th>
								</tr>
							</thead>
							{{--Extract user data--}}
							@foreach($payments as $payment)
							@endforeach
							@foreach($payments as $hostel)
							@endforeach
							@foreach($payments as $payment)
								<tr>
									<td>
										<strong>
											{{ $payment->stripeID }}
										</strong>
									</td>
									<td>{{ $payment->user->regNo }}</td>
									<td>{{ $payment->hostel->name }}</td>
									<td>
										<span class="label label-success">KES {{ number_format($payment->amount) }}</span>
									</td>
									<td>{{ date('F d , Y', strtotime($payment->created_at)) }}</td>
								</tr>
							@endforeach
						</table>
						<div class="pull-right">
							{{ $payments->links() }}
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