@extends('mishandling.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div class="container-xxl" id="kt_content_container">
		<!--begin::Card-->
		<div class="card">


			<!--begin::Card header-->
			<div class="card-header border-0 pt-6">
				<!--begin::Card title-->
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-6">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Subscriptions" />
					</div>
					<!--end::Search-->
				</div>
				<!--begin::Card title-->
				<!--begin::Card toolbar-->
				
			</div>
			<!--end::Card header-->
			
			
			
			
			
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
							<th class="min-w-125px">Mishandling ID</th>
							<th class="min-w-125px">Mishandling Status</th>
							<th class="min-w-125px">Shipping Courier</th>
							<th class="min-w-125px">Shipped Date</th>
							<th class="min-w-125px">Actions</th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="text-gray-600 fw-semibold">
						
						@foreach ($mishandling as $mishand)
						<tr>
							<td>
								<a href="#" class="text-gray-800 text-hover-primary mb-1">#00{{ $mishand->miss_id }}</a>
							</td>
							<!--begin::Customer=-->
							<td>
								@if($mishand->miss_status == 'Pending')
									  <span class="badge badge-warning">Pending</span>
									@elseif($mishand->miss_status == 'Reviewing')
									  <span class="badge badge-secondary">Reviewing</span>
									@elseif($mishand->miss_status == 'Reviewed')
									  <span class="badge badge-info">Reviewed</span>
									@else
									  <span class="badge badge-success">Resolved</span>
								@endif
							</td>
							<!--end::Customer=-->
							<td>
								<a class="text-gray-800 text-hover-primary mb-1">{{ $mishand->shipping->shp_courier }}</a>
							</td>

							<td>
								<a class="text-gray-800 text-hover-primary mb-1">{{ \Carbon\Carbon::parse($mishand->shipping->shp_date)->format('M d, Y') }}</a>
							</td> 

							<td>
								<a href="{{ url('/mishandling/' . $mishand->miss_id) }}" title="View Mishandling"><button class="btn btn-info btn-sm">View</button></a>
								<a href="{{ url('/mishandling/' . $mishand->miss_id . '/edit') }}" title="Edit Mishandling"><button class="btn btn-primary btn-sm">Edit</button></a>
							</td>
							
						</tr>

						@endforeach
						
					</tbody>
					<!--end::Table body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
		<!--begin::Modals-->
		<!--begin::Modal - Adjust Balance-->
		
		<!--end::Modals-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->
@endsection