@extends('layouts.admin')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			UniLink
			<small>Dashboard <i class="fa fa-smile-o"></i></small>
		</h1>
	</section>
	
	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Total Units</span>
						<span class="info-box-number">{{ number_format($totalRooms) }}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-opencart"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Booked Units</span>
						<span class="info-box-number">{{ number_format($bookedUnits) }}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			
			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-key"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Remaining Units</span>
						<span class="info-box-number">{{ number_format($totalRooms - $bookedUnits) }}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Total Users</span>
						<span class="info-box-number">{{ number_format($users) }}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<div class="col-md-8">
				<!-- PRODUCT LIST -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Most Popular Hostels</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<ul class="products-list product-list-in-box">
							@if(count($hostels) > 0)
								@foreach($hostels as $hostel)
									<li class="item">
										<div class="product-img">
											<img src="{{ asset('img/default-50x50.gif') }}" alt="Product Image">
										</div>
										<div class="product-info">
											<a href="javascript:void(0)" class="product-title">{{ $hostel->name }}
												<span class="label label-warning pull-right">KES {{ number_format($hostel->price) }}</span>
												<span class="label label-primary pull-right">Rooms {{ number_format($hostel->totalRooms) }}</span>
												<span class="label label-success pull-right">Booked {{ number_format($hostel->bookedUnits) }}</span>
												<span class="label label-danger pull-right">Remaining {{ number_format($hostel->totalRooms - $hostel->bookedUnits) }}</span>						</a>
											<span class="product-description">{{ $hostel->description }}</span>
										</div>
									</li>
									<!-- /.item -->
								@endforeach
							@else
							@endif
						</ul>
					</div>
					<br><br>
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="javascript:void(0)" class="uppercase">View All Products</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
				<!-- /.row -->
			</div>
			<!-- /.col -->
			
			<div class="col-md-4">
				<!-- Info Boxes Style 2 -->
				<div class="info-box bg-aqua">
					<span class="info-box-icon"><i class="fa fa-money"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Total Money Received</span>
						<span class="info-box-number">5,200</span>
						<div class="progress">
							<div class="progress-bar" style="width: 20%"></div>
						</div>
						<span class="progress-description">
                    20% Increase in 30 Days
                  </span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<div class="info-box bg-yellow">
					<span class="info-box-icon"><i class="fa fa-institution"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Total Transactions</span>
						<span class="info-box-number">163,921</span>
						
						<div class="progress">
							<div class="progress-bar" style="width: 40%"></div>
						</div>
						<span class="progress-description">
                    40% Increase in 30 Days
                  </span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<div class="info-box bg-green">
					<span class="info-box-icon"><i class="fa fa-send"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Successful Transactions</span>
						<span class="info-box-number">92,050</span>
						
						<div class="progress">
							<div class="progress-bar" style="width: 20%"></div>
						</div>
						<span class="progress-description">
                    20% Increase in 30 Days
                  </span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<div class="info-box bg-red">
					<span class="info-box-icon"><i class="fa fa-close"></i></span>
					
					<div class="info-box-content">
						<span class="info-box-text">Failed Transactions</span>
						<span class="info-box-number">114,381</span>
						
						<div class="progress">
							<div class="progress-bar" style="width: 70%"></div>
						</div>
						<span class="progress-description">
                    70% Increase in 30 Days
                  </span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
@endsection