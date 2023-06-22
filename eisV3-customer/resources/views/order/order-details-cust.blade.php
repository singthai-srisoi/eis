@extends('template')
@section('order_hist')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="order_hist">
	<!--begin::Container-->
	<div class="container-xxl" id="order_hist_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#order_hist_container', lg: '#kt_header_container'}">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Order Details</h1>
			<!--end::Heading-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
				<li class="breadcrumb-item text-muted">
					<a href="{{ url()->previous() }}" class="text-muted">Order History</a>
				</li>
				<li class="breadcrumb-item text-dark">Order Details</li>
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title=-->

		<!--begin::Order details page-->
		<div class="d-flex flex-column gap-7 gap-lg-10">
			<!--begin::Order summary-->
			<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
				<!--begin::Order details-->
				<div class="card card-flush py-4 flex-row-fluid">
					<!--begin::Card header-->
					<div class="card-header">
						<div class="card-title">
							<h2>Order Details #{{$id->o_id}}</h2>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
								<!--begin::Table body-->
								<tbody class="fw-semibold text-gray-600">
									<!--begin::Date-->
									<tr>
										<td class="text-muted">
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
												<span class="svg-icon svg-icon-2 me-2">
													<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor" />
														<path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Date Added
											</div>
										</td>
										<td class="fw-bold text-end">{{$id['o_dateIssued']}}</td>
									</tr>
									<!--end::Date-->
									<!--begin::Payment method-->
									<tr>
										<td class="text-muted">
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
												<span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor" />
														<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor" />
														<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Payment Receipt
											</div>
										</td>
										<td class="fw-bold text-end">
											<a href="{{url('receipt-cust', $id['o_id'])}}" class="text-gray-600 text-hover-primary">#{{$payment['p_orderId']}}</a>
</td>
									</tr>
									<!--end::Payment method-->
									<!--begin::Invoice-->
									<tr>
										<td class="text-muted">
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
												<span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor" />
														<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor" />
														<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Invoice
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="View the invoice generated by this order."></i>
											</div>
										</td>
										<td class="fw-bold text-end">
											<a href="{{url('invoice-cust', $id['o_id'])}}" class="text-gray-600 text-hover-primary">#TSK-{{ str_pad($id['o_id'], 8, '0', STR_PAD_LEFT) }}</a>
										</td>
									</tr>
									<!--end::Invoice-->
									<!--begin::Shipping-->
									<tr>
										<td class="text-muted">
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
												<span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="currentColor" />
														<path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Shipping
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="View the shipping manifest generated by this order."></i>
											</div>
										</td>
										<td class="fw-bold text-end">
											<a href="#" class="text-gray-600 text-hover-primary">#SHP-0025410</a>
										</td>
									</tr>
									<!--end::Shipping-->
									<!--begin::Date-->
									<tr>
										<td class="text-muted">
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
												<span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="currentColor" />
														<path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Shipping Method
											</div>
										</td>
										<td class="fw-bold text-end">Flat Shipping Rate</td>
									</tr>
									<!--end::Date-->
								</tbody>
								<!--end::Table body-->
							</table>
							<!--end::Table-->
						</div>
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Order details-->
			</div>
			<!--end::Order summary-->

			<!--begin::Orders-->
			<div class="d-flex flex-column gap-7 gap-lg-10">
				<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
					<!--begin::Payment address-->
					<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
						<!--begin::Background-->
						<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
							<img src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px" />
						</div>
						<!--end::Background-->
						<!--begin::Card header-->
						<div class="card-header">
							<div class="card-title">
								<h2>Payment Address</h2>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">{{$address->a_line1}}, {{$address->a_line2}},
							<br />{{$address->a_city}}, {{$address->a_postcode}}
							<br />{{$address->a_state}},
							<br />{{$address->a_country}}.
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Payment address-->
					<!--begin::Shipping address-->
					<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
						<!--begin::Background-->
						<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
							<img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px" />
						</div>
						<!--end::Background-->
						<!--begin::Card header-->
						<div class="card-header">
							<div class="card-title">
								<h2>Shipping Address</h2>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">{{$address->a_line1}}, {{$address->a_line2}},
							<br />{{$address->a_city}}, {{$address->a_postcode}}
							<br />{{$address->a_state}},
							<br />{{$address->a_country}}.
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Shipping address-->
				</div>
				<!--begin::Product List-->
				<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
					<!--begin::Card header-->
					<div class="card-header">
						<div class="card-title">
							<h2>Order Items #{{$id->o_id}}</h2>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
								<!--begin::Table head-->
								<thead>
									<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
										<th class="min-w-175px">Product</th>
										<th class="min-w-70px text-center">Quantity</th>
										<th class="min-w-100px text-end">Unit Price</th>
										<th class="min-w-100px text-end">Total</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody class="fw-semibold text-gray-600">
									@php $total = 0 @endphp
									@foreach($order as $item)
									@php $total += $item->oItem_totalprice @endphp
									<!--begin::Products-->
									<tr>
										<!--begin::Product-->
										<td>
											<div class="d-flex align-items-center">
												<!--begin::Thumbnail-->
												<div class="symbol symbol-50px">
													<span class="symbol-label" style="background-image:url('{{ asset('assets/media/products/' . $item->tb_product->prod_image) }}');"></span>
												</div>
												<!--end::Thumbnail-->
												<!--begin::Title-->
												<div class="ms-5">
													<div class="fw-bold text-gray-600">{{$item->tb_product->prod_name}}</div>
												</div>
												<!--end::Title-->
											</div>
										</td>
										<!--end::Product-->
										<!--begin::Quantity-->
										<td class="text-center">{{$item->oItem_qty}}</td>
										<!--end::Quantity-->
										<!--begin::Price-->
										<td class="text-end">RM {{$item->tb_product->prod_sellprice}}</td>
										<!--end::Price-->
										<!--begin::Total-->
										<td class="text-end">RM {{$item->oItem_totalprice}}</td>
										<!--end::Total-->
									</tr>
									@endforeach
									<!--begin::Subtotal-->
									@php $shipping = 15 @endphp
									<tr>
										<td colspan="3" class="text-end">Subtotal</td>
										<td class="text-end">RM {{$total}}</td>
									</tr>
									<!--end::Subtotal-->
									<!--begin::Shipping-->
									<tr>
										<td colspan="3" class="text-end">Shipping Rate</td>
										<td class="text-end">RM {{$shipping}}.00</td>
									</tr>
									<!--end::Shipping-->
									<!--begin::Grand total-->
									<tr>
										<td colspan="3" class="fs-3 text-dark text-end">Grand Total</td>
										<td class="text-dark fs-3 fw-bolder text-end">RM {{$id->o_totalAmount}}</td>
									</tr>
									<!--end::Grand total-->
								</tbody>
								<!--end::Table head-->
							</table>
							<!--end::Table-->
							<a href="{{url('order-history-cust', session('user')['u_id'])}}" class="btn btn-light-info btn-sm mx-2"><i class="bi bi-arrow-left"></i></a>
						</div>
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Product List-->
			</div>
			<!--end::Orders-->
		</div>
		<!--end::Order details page-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->

@endsection