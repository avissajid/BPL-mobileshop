@extends('layouts.orderApp')

@section('content')
<div class="container-fluid">
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		  <h5 class="txt-dark">Product Orders</h5>
		</div>
	</div>
	<!-- /Title -->
	
	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div class="panel-body row">
						<div class="table-wrap">
							<div class="table-responsive">
								<table class="table display responsive product-overview mb-30" id="myTable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Order ID</th>
											<th>Photo</th>
											<th>Product</th>
											<th>Quantity</th>
											<th>Date</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="txt-dark">Kashan</td>
											<td class="txt-dark">#1</td>
											<td>
												<img src="{{asset('adminpanel/dist/img/chair.jpg')}}" alt="iMac" width="80">
											</td>
											<td>Samsung S8</td>
											<td>20</td>
											<td>10-10-2016</td>
											<td>
												<span class="label label-default font-weight-100">Failed</span>
											</td>
											<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
											<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
										</tr>
										<tr>
											<td class="txt-dark">Sufian</td>
											<td class="txt-dark">#2</td>
											<td>
												<img src="{{asset('adminpanel/dist/img/chair2.jpg')}}" alt="iPhone" width="80">
											</td>
											<td>Samsung S7 Edge</td>
											<td>15</td>
											<td>09-10-2017</td>
											<td>
												<span class="label label-warning font-weight-100">Pending</span>
											</td>
											<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
										</tr>
										<tr>
											<td class="txt-dark">Sajid</td>
											<td class="txt-dark">#3</td>
											<td>
												<img src="{{asset('adminpanel/dist/img/chair3.jpg')}}" alt="apple_watch" width="80">
											</td>
											<td>Apple iPhone X</td>
											<td>12</td>
											<td>08-10-2018</td>
											<td>
												<span class="label label-success font-weight-100">Paid</span>
											</td>
											<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- /Row -->
</div>
@endsection