@extends('template')
@section('order_hist')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="order_hist">
	<!--begin::Container-->
	<div class="container-xxl" id="order_hist_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#order_hist_container', lg: '#kt_header_container'}">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">My Orders</h1>
			<!--end::Heading-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
				<li class="breadcrumb-item text-muted">Account</li>
				<li class="breadcrumb-item text-muted">My Orders</li>
				<li class="breadcrumb-item text-dark">Order History</li>
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title=-->

		<!--begin::Order details page-->
		<div class="d-flex flex-column gap-7 gap-lg-10">
			<!--begin::Orders-->
			<div class="d-flex flex-column gap-7 gap-lg-10">
				<!--begin::Order history-->
				<div class="card card-flush py-4 flex-row-fluid">
					<!--begin::Card header-->
					<div class="card-header">
						<div class="card-title">
							<h2>Order History</h2>
						</div>
						<div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
							<!--begin::Button-->
							<a href="{{url('product-cust')}}" class="btn btn-info btn-sm">Go <i class="bi bi-cart-fill"></i></a>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
							
							@if (session('success'))
								<div class="alert alert-success">
									{{ session('success') }}
								</div>
							@endif
								<!--begin::Table head-->
								<thead>
									<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
										<th class="min-w-100px">Date Added</th>
										<th class="min-w-160px">Order ID</th>
										<th class="min-w-70px">Order Status</th>
										<th class="min-w-70px">Invoice</th>
										<!-- <th class="min-w-80px">Rate Order</th> -->
										<th class="min-w-35px"></th>
									</tr>
								@if ($orders->isEmpty())
									<div class="alert alert-info">
									You haven't ordered anything yet. Look around and let us know if you need help or have questions. Enjoy shopping!
									</div>
								@endif
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody class="fw-semibold text-gray-600">
									@foreach($orders as $order)
									<tr>
										<!--begin::Date-->
										<td>{{$order['o_dateIssued']}}</td>
										<!--end::Date-->
										<!--begin::Comment-->
										<td>{{$order['o_id']}}</td>
										<!--end::Comment-->
										<!--begin::Status-->
										<td>
											<!--begin::Badges-->
											@if ($order->o_status == 'Paid')
												<div class="badge badge-light-primary">{{$order->o_status}}</div>
											@elseif ($order->o_status == 'Shipped')
												<div class="badge badge-light-secondary">{{$order->o_status}}</div>
											@else
												<div class="badge badge-light-success">{{$order->o_status}}</div>
											@endif
											<!--end::Badges-->
										</td>
										<!--end::Status-->
										<!--begin::Invoice-->
										<td><a href="{{url('invoice-cust', $order['o_id'])}}" class="btn btn-secondary btn-sm">Invoice</i></a></td>
										<!--end::Invoice-->
										<!--begin::Customer Notified-->
										<!-- <td>
										@for($i = 0; $i < 5; $i++)
											@if($i < $order->o_rating)
												<i class="bi bi-star-fill" style="color: yellow;"></i>
											@else
												<i class="bi bi-star-fill" style="color: gray;"></i>
											@endif
										@endfor 
										</td> -->
										<!--end::Customer Notified-->
										<!--begin::View Order-->
										<td><a href="{{url('order-details-cust', $order['o_id'])}}" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-right"></i></a></td>
										<!--end::View Order-->
										@endforeach
									</tr>
								</tbody>
								<!--end::Table head-->
							</table>
							<!--end::Table-->
						</div>
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Order history-->
			</div>
			<!--end::Orders-->
		</div>
		<!--end::Order details page-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->

@endsection