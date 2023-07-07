@extends('templatecust')
@section('receipt-cust')
@php
use Carbon\Carbon;
@endphp

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div class="container-xxl" id="kt_content_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Receipt</h1>
			<!--end::Heading-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
				<li class="breadcrumb-item text-muted">
					<a href="{{url('order-history-cust', session('user')['u_id'])}}" class="text-muted">Order</a>
				</li>
				<li class="breadcrumb-item text-muted">Receipt</li>
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title=-->
		<!-- begin::Invoice 3-->
		<div class="card">
			<!-- begin::Body-->
			<div class="card-body py-20">

				<div class="mw-lg-950px mx-auto w-100">
					<!-- begin::Header-->
					<div class="d-flex justify-content-center flex-column flex-sm-row">
						<h5 style="text-align: center;" class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">TSK SYNERGY SDN. BHD</h5>
					</div>
					<h6 style="text-align: center;">19 & 21 Jalan Mega 1/8, Taman Perindustrian Nusa Cemerlang</h6>
					<h6 style="text-align: center;">79200 Iskandar Puteri, Johor.</h6>
					<h6 style="text-align: center;">P: (Phone) 011 3935 7998</h6>
					<br>

					<div class="fw-bold fs-2 text-end mb-4">
						<div class="d-flex justify-content-between">
							<span>Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}</span>
							@php $order_num = $orders[0]; @endphp
							<span class="text-end">Receipt#: {{$order_num->tb_order->o_id}}</span>
						</div>
					</div>

					<div class="d-flex justify-content-center flex-column flex-sm-row mt-5">
						<h5 style="text-align: center;" class=" text-gray-800 fs-2qx pe-5 pb-7">Receipt</h5>
					</div>
					<!--begin::Body-->
					<div class="pb-12">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column gap-7 gap-md-10">
							<!--begin::Separator-->
							<div class="separator"></div>
							<!--begin::Separator-->
							<!--begin:Order summary-->
							<div class="d-flex justify-content-between flex-column">
								<!--begin::Table-->
								<div class="table-responsive border-bottom mb-9">
									<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
										<thead>
											<tr class="border-bottom fs-6 fw-bold text-muted">
												<th class="min-w-175px pb-2">Product</th>
												<th class="min-w-70px text-end pb-2">#</th>
												<th class="min-w-80px text-end pb-2">Price</th>
											</tr>
										</thead>
										<tbody class="fw-semibold text-black-600">
											@foreach ($orders as $c)
											<tr>
												<td>{{$c->tb_product->prod_name}}</td>
												<td class="text-end">{{$c->oItem_qty}}</td>
												<td class="text-end">RM {{$c->tb_product->prod_sellprice}}</td>

											</tr>
											@endforeach
											<tr>
												<td></td>
												<td class="text-end">Total</td>
												<td class="text-end">RM {{$c->tb_order->o_totalAmount}}</td>
											</tr>
											<!--end::Products-->
										</tbody>
									</table>
								</div>
								<div class="text-end">
								<a href="{{url('order-history-cust', session('user')['u_id'])}}" type="button" class="btn btn-primary my-1 me-5">Back</a>
									<button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Receipt</button>
								</div>
								<!--end::Table-->
							</div>
							<!--end:Order summary-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Body-->
		@endsection