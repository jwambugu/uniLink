@extends('beautymail::templates.minty')

@section('content')

	@include('beautymail::templates.minty.contentStart', ['color' => '#3c8dbc'])
	<tr>
		<td class="title">
			<strong>
				Thanks for your order {{ $name }}, here's your invoice.
			</strong>
		</td>
	</tr>
	<tr>
		<td width="100%" height="10"></td>
	</tr>
	<tr>
		<td class="paragraph">
			You have received this email because you have booked a room using UniLink. We are happy you chose us.
		</td>
	</tr>
	<tr>
		<td width="100%" height="25"></td>
	</tr>
	<tr>
		<td class="title">
			Booking Details
		</td>
	<tr>
		<td width="100%" height="10"></td>
	</tr>
	<tr>
		<td class="paragraph">
			<strong>Hostel name</strong> - {{ $name }}
		</td>
	</tr>
	<tr>
		<td class="paragraph">
			<strong>Hostel Rent</strong> - KES {{ $name }}
		</td>
	</tr>
	<tr>
		<td class="paragraph">
			<strong>Stripe ID</strong> - {{ $name }}
		</td>
	</tr>
	<tr>
		<td class="paragraph">
			<strong>Total Amount - KES {{ $name }}</strong>
		</td>
	</tr>
	<tr>
		<td width="100%" height="25"></td>
	</tr>
	{{--<tr>--}}
		{{--<td>--}}
			{{--@include('beautymail::templates.minty.button', ['text' => 'Sign in', 'link' => '#'])--}}
		{{--</td>--}}
	{{--</tr>--}}
	<tr>
		<td width="100%" height="25"></td>
	</tr>
	@include('beautymail::templates.minty.contentEnd')

@stop