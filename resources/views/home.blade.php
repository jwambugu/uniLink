@extends('layouts.auth')

@section('content')
    @include('inc.navbar')
    <!-- My Propertiess start -->
    <div class="content-area my-properties">
	    <div class="container">
		    <div class="row">
			    <div class="col-lg-4 col-md-4 col-sm-12">
				    <!-- User account box start -->
				    @include('inc.sideNav')
				    <!-- User account box end -->
			    </div>

			    <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="main-title-2">
					    <h1><span>My</span> Properties</h1>
				    </div>
				    <!-- table start -->
				    <table class="manage-table responsive-table">
					    <tbody>

					    <tr>
						    <td class="title-container">
							    <img src="img/my-properties/my-properties-1.jpg" alt="my-properties-1" class="img-responsive hidden-xs">
							    <div class="title">
								    <h4><a href="#">beautiful  Family  home </a></h4>
								    <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
								    <span class="table-property-price">$900 / monthly</span>
							    </div>
						    </td>
						    <td class="expire-date hidden-xs">December 17 2017</td>
						    <td class="action">
							    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
							    <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
							    <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
						    </td>
					    </tr>

					    <tr>
						    <td class="title-container">
							    <img src="img/my-properties/my-properties-2.jpg" alt="my-properties-5" class="img-responsive hidden-xs">
							    <div class="title">
								    <h4><a href="#">beautiful  Family  home </a></h4>
								    <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
								    <span class="table-property-price">$900 / monthly</span>
							    </div>
						    </td>
						    <td class="expire-date hidden-xs">December 17 2017</td>
						    <td class="action">
							    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
							    <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
							    <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
						    </td>
					    </tr>

					    <tr>
						    <td class="title-container">
							    <img src="img/my-properties/my-properties-3.jpg" alt="my-properties-3" class="img-responsive hidden-xs">
							    <div class="title">
								    <h4><a href="#">beautiful  Family  home </a></h4>
								    <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
								    <span class="table-property-price">$900 / monthly</span>
							    </div>
						    </td>
						    <td class="expire-date hidden-xs">December 17 2017</td>
						    <td class="action">
							    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
							    <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
							    <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
						    </td>
					    </tr>

					    <tr>
						    <td class="title-container">
							    <img src="img/my-properties/my-properties-4.jpg" alt="my-properties-4" class="img-responsive hidden-xs">
							    <div class="title">
								    <h4><a href="#">beautiful  Family  home </a></h4>
								    <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
								    <span class="table-property-price">$900 / monthly</span>
							    </div>
						    </td>
						    <td class="expire-date hidden-xs">December 17 2017</td>
						    <td class="action">
							    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
							    <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
							    <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
						    </td>
					    </tr>

					    <tr>
						    <td class="title-container">
							    <img src="img/my-properties/my-properties-5.jpg" alt="my-properties-5" class="img-responsive hidden-xs">
							    <div class="title">
								    <h4><a href="#">beautiful  Family  home </a></h4>
								    <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
								    <span class="table-property-price">$900 / monthly</span>
							    </div>
						    </td>
						    <td class="expire-date hidden-xs">December 17 2017</td>
						    <td class="action">
							    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
							    <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
							    <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
						    </td>
					    </tr>

					    </tbody>
				    </table>
				    <!-- table end -->
			    </div>
		    </div>
	    </div>
    </div>
    <!-- My Propertiess end -->
@endsection
