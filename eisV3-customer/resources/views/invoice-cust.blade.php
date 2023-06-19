@extends('template')
@section('invoice')


<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="invoice">
	<!--begin::Container-->
	<div class="container-xxl" id="invoice_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Invoice 3</h1>
			<!--end::Heading-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
				<li class="breadcrumb-item text-muted">
					<a href="../../demo3/dist/index.html" class="text-muted">Home</a>
				</li>
				<li class="breadcrumb-item text-muted">Apps</li>
				<li class="breadcrumb-item text-muted">Invoice Manager</li>
				<li class="breadcrumb-item text-muted">View Invoices</li>
				<li class="breadcrumb-item text-dark">Invoice 3</li>
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title=-->


		<!-- begin::Invoice 3-->
		<div class="card">
			<!-- begin::Body-->
			<div class="card-body py-20">
				<!-- begin::Wrapper-->
				<div class="mw-lg-950px mx-auto w-100">
					<!-- begin::Header-->
					<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
						<h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
						<!--end::Logo-->
						<div class="text-sm-end">
							<!--begin::Logo-->
							<a href="#" class="d-block mw-150px ms-sm-auto">
								<img alt="Logo" src="assets/media/svg/brand-logos/lloyds-of-london-logo.svg" class="w-100" />
							</a>
							<!--end::Logo-->
							<!--begin::Text-->
							<div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
								<div>Cecilia Chapman, 711-2880 Nulla St, Mankato</div>
								<div>Mississippi 96522</div>
							</div>
							<!--end::Text-->
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="pb-12">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column gap-7 gap-md-10">
							<!--begin::Message-->
							<div class="fw-bold fs-2">Dear Olivia Wild
							<span class="fs-6">(olivia@corpmail.com)</span>,
							<br />
							<span class="text-muted fs-5">Here are your order details. We thank you for your purchase.</span></div>
							<!--begin::Message-->
							<!--begin::Separator-->
							<div class="separator"></div>
							<!--begin::Separator-->
							<!--begin::Order details-->
							<div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
								<div class="flex-root d-flex flex-column">
									<span class="text-muted">Order ID</span>
									<span class="fs-5">#14534</span>
								</div>
								<div class="flex-root d-flex flex-column">
									<span class="text-muted">Date</span>
									<span class="fs-5">18 August, 2022</span>
								</div>
								<div class="flex-root d-flex flex-column">
									<span class="text-muted">Invoice ID</span>
									<span class="fs-5">#INV-000414</span>
								</div>
								<div class="flex-root d-flex flex-column">
									<span class="text-muted">Shipment ID</span>
									<span class="fs-5">#SHP-0025410</span>
								</div>
							</div>
							<!--end::Order details-->
							<!--begin::Billing & shipping-->
							<div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
								<div class="flex-root d-flex flex-column">
									<span class="text-muted">Billing Address</span>
									<span class="fs-6">Unit 1/23 Hastings Road,
									<br />Melbourne 3000,
									<br />Victoria,
									<br />Australia.</span>
								</div>
								<div class="flex-root d-flex flex-column">
									<span class="text-muted">Shipping Address</span>
									<span class="fs-6">Unit 1/23 Hastings Road,
									<br />Melbourne 3000,
									<br />Victoria,
									<br />Australia.</span>
								</div>
							</div>
							<!--end::Billing & shipping-->
							<!--begin:Order summary-->
							<div class="d-flex justify-content-between flex-column">
								<!--begin::Table-->
								<div class="table-responsive border-bottom mb-9">
									<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
										<thead>
											<tr class="border-bottom fs-6 fw-bold text-muted">
												<th class="min-w-175px pb-2">Products</th>
												<th class="min-w-70px text-end pb-2">SKU</th>
												<th class="min-w-80px text-end pb-2">QTY</th>
												<th class="min-w-100px text-end pb-2">Total</th>
											</tr>
										</thead>
										<tbody class="fw-semibold text-gray-600">
											<!--begin::Products-->
											<tr>
												<!--begin::Product-->
												<td>
													<div class="d-flex align-items-center">
														<!--begin::Thumbnail-->
														<a href="../../demo3/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<!--begin::Title-->
														<div class="ms-5">
															<div class="fw-bold">Product 1</div>
															<div class="fs-7 text-muted">Delivery Date: 18/08/2022</div>
														</div>
														<!--end::Title-->
													</div>
												</td>
												<!--end::Product-->
												<!--begin::SKU-->
												<td class="text-end">03496009</td>
												<!--end::SKU-->
												<!--begin::Quantity-->
												<td class="text-end">2</td>
												<!--end::Quantity-->
												<!--begin::Total-->
												<td class="text-end">$240.00</td>
												<!--end::Total-->
											</tr>
											<tr>
												<!--begin::Product-->
												<td>
													<div class="d-flex align-items-center">
														<!--begin::Thumbnail-->
														<a href="../../demo3/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<!--begin::Title-->
														<div class="ms-5">
															<div class="fw-bold">Footwear</div>
															<div class="fs-7 text-muted">Delivery Date: 18/08/2022</div>
														</div>
														<!--end::Title-->
													</div>
												</td>
												<!--end::Product-->
												<!--begin::SKU-->
												<td class="text-end">01833008</td>
												<!--end::SKU-->
												<!--begin::Quantity-->
												<td class="text-end">1</td>
												<!--end::Quantity-->
												<!--begin::Total-->
												<td class="text-end">$24.00</td>
												<!--end::Total-->
											</tr>
											<!--end::Products-->
											<!--begin::Subtotal-->
											<tr>
												<td colspan="3" class="text-end">Subtotal</td>
												<td class="text-end">$264.00</td>
											</tr>
											<!--end::Subtotal-->
											<!--begin::VAT-->
											<tr>
												<td colspan="3" class="text-end">VAT (0%)</td>
												<td class="text-end">$0.00</td>
											</tr>
											<!--end::VAT-->
											<!--begin::Shipping-->
											<tr>
												<td colspan="3" class="text-end">Shipping Rate</td>
												<td class="text-end">$5.00</td>
											</tr>
											<!--end::Shipping-->
											<!--begin::Grand total-->
											<tr>
												<td colspan="3" class="fs-3 text-dark fw-bold text-end">Grand Total</td>
												<td class="text-dark fs-3 fw-bolder text-end">$269.00</td>
											</tr>
											<!--end::Grand total-->
										</tbody>
									</table>
								</div>
								<!--end::Table-->
							</div>
							<!--end:Order summary-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Body-->
					<!-- begin::Footer-->
					<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
						<!-- begin::Actions-->
						<div class="my-1 me-5">
							<!-- begin::Pint-->
							<button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
							<!-- end::Pint-->
							<!-- begin::Download-->
							<button type="button" class="btn btn-light-success my-1">Download</button>
							<!-- end::Download-->
						</div>
						<!-- end::Actions-->
						<!-- begin::Action-->
						<a href="../../demo3/dist/apps/invoices/create.html" class="btn btn-primary my-1">Create Invoice</a>
						<!-- end::Action-->
					</div>
					<!-- end::Footer-->
				</div>
				<!-- end::Wrapper-->
			</div>
			<!-- end::Body-->
		</div>
		<!-- end::Invoice 1-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->

@endsection