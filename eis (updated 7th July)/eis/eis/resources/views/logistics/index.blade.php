@extends('logistics.layout')

@section('content')


	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Container-->
		<div class="container-xxl d-flex justify-content-between" id="kt_content_container">
			<!--begin::Products-->
			<div class="card card-flush col-md-5">
				<!--begin::Card header-->
				<div class="card-header align-items-center py-5 gap-2 gap-md-5">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Export dropdown-->
						<h4>Order List</h4>
						<!--end::Export dropdown-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
								<th class="min-w-100px">Order ID</th>
								<th class="min-w-100px">Order Date</th>
								<th class="min-w-100px">Add Shipping</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-semibold text-gray-600">
							<!--begin::Table row-->
							@foreach($order as $ord)
							<tr>
								<!--begin::Date=-->
								<td>{{$ord->o_id}}</td>
								<!--end::Date=-->
								<!--begin::Shipping ID=-->
								<td>{{$ord->o_dateIssued}}</td>
								<!--end::Shipping ID=-->
								<!--begin::No orders=-->
								<td>
									<a class="btn btn-primary" href="{{ url('logistics/' . $ord->o_id . '/create') }}">Add Shipping</a>
								</td>
							</tr>
							@endforeach
							<!--end::Table row-->
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Products-->
			<!--begin::Products-->
			<div class="card card-flush col-md-6">
				<!--begin::Card header-->
				<div class="card-header align-items-center py-5 gap-2 gap-md-5">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Export dropdown-->
						<h4>Shipping List</h4>
						<!--end::Export dropdown-->
					</div>
					<!--end::Card toolbar-->
					<span class="svg-icon svg-icon-1 position-absolute ms-4" style="right: 40%;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
							<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
						</svg>
					</span>
					
					<input type="text" id="searchInput" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Shipping List" />

				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
						<!--begin::Table head--> 
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
								<th class="min-w-50px">Shipping ID</th>
								<th class="min-w-100px">Shipping Date</th>
								<th class="min-w-100px">Status</th>
								<th class="min-w-100px">Action</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-semibold text-gray-600">
							<!--begin::Table row-->
							@foreach($shipping as $shp)
							<tr>
								<!--begin::Date=-->
								<td>{{$shp->shp_id}}</td>
								<!--end::Date=-->
								<!--begin::Shipping ID=-->
								<td>{{$shp->shp_date}}</td>
								<!--end::Shipping ID=-->
								<!--begin::Shipping ID=-->
								<td>
									@if($shp->shp_status == 1)
									  <span class="badge badge-warning">Pending</span>
									@elseif($shp->shp_status == 2)
									  <span class="badge badge-secondary">Packed</span>
									@elseif($shp->shp_status == 3)
									  <span class="badge badge-info">Shipping</span>
									@else
									  <span class="badge badge-success">Delivered</span>
									@endif
								  </td>
								<!--end::Shipping ID=-->
								<!--begin::No orders=-->
								<td>
									<a href="{{ url('/logistics/' . $shp->shp_id) }}" title="View Shipping"><button class="btn btn-info btn-sm">View</button></a>
									<a href="{{ url('/logistics/' . $shp->shp_id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm">Edit</button></a>
									<form method="POST" action="{{ url('/logistics' . '/' . $shp->shp_id) }}" accept-charset="UTF-8" style="display:inline">
										{{ method_field('DELETE') }}
										{{ csrf_field() }}
										<button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
							<!--end::Table row-->
						</tbody>
						<!--end::Table body-->
						
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Products-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Content-->
	

@endsection