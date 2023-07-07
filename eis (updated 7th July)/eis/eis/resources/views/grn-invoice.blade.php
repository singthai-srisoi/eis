@extends('template')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div class="container-xxl" id="kt_content_container">
		<!-- begin::Invoice-->
		<div class="card">
			@foreach($grn as $grn)
			<!-- begin::Body-->
			<div class="card-body py-20">
				<!-- begin::Wrapper-->
				<div class="mw-lg-950px mx-auto w-100" id="print-invoice">
					<!-- begin::Header -->
					<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
						<!-- begin::Logo -->
						<div class="text-sm" style="flex: 0 0 auto;">
							<div align="left">
								<a href="#" class="d-inline-block mw-200px">
									<img alt="Logo" src="assets/media/logos/tsk logo.png" class="w-100" />
								</a>
							</div>
						</div>
						<!-- end::Logo -->
						<div class="text-sm" style="flex: 0 0 auto;">
							<!-- begin::Text -->
							<div class="text-sm-end font-weight-bold fs-4" align="right">
								<div><strong>TSK SYNERGY SDN BHD</strong></div>
							</div>
							<div class="text-sm-end font-weight-bold fs-9" align="right">
								<div>NO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.</div>
								<div>Tel: 07-5950803</div>
							</div>
							<!-- end::Text -->
						</div>
					</div>
					<!-- end::Header -->
					<!--begin::Body-->
					<div class="pb-12">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column gap-8 gap-md-5">
							<!--begin::Separator-->
							<div class="separator solid"></div>
							<!--begin::Separator-->
							<!--begin::Order details-->
							<div class="text-start font-weight-bold fs-8">
								<strong>To :</strong> {{ $grn->tb_purchaseorder->tb_supplier->sup_name }}
								({{ $grn->tb_purchaseorder->tb_supplier->sup_shop }})
								<br>
								<strong>Tel: -</strong>
								<br>
								<strong>Fax: </strong>
							</div>
						</div>
						<div class="d-flex flex-column gap-8 gap-md-5">
							<!--begin::Separator-->
							<div class="separator solid"></div>
							<!--begin::Separator-->
							<!--begin::Order details-->
							<div class="text-sm-end font-weight-bold fs-2" align="right">
								<strong>GRN
									{{ $grn->grn_id }}
								</strong>
							</div>
						</div>
						<div class="text-sm-end font-weight-bold fs-8" align="right">
							<div><strong>Date Issued : </strong> {{ $grn->grn_date }}</div>
							<div><strong>Purchase Order Number :</strong> PO{{$grn->grn_poid}}</div>
							<div><strong>Customer Delivery Order Number :</strong> {{$grn->grn_deliveryOrderNum}}</div>
							<div><strong>Customer Delivery Order Date :</strong> {{$grn->grn_deliverydate}}</div>
							<div>PAGE: 1 of 1</div>
						</div>

						<!--end::Order details-->
						<br>
						<!--begin:Order summary-->
						<div class="d-flex justify-content-between flex-column">
							<!--begin::Table-->
							<div class="table-responsive border-bottom mb-9">
								<table class="table align-middle table-row-dashed fs-7 gy-5 mb-0">
									<thead>
										<tr class="border-bottom fs-6">
											<th class="min-w-175px pb-2">ITEM CODE | PART NUMBER</th>
											<th class="min-w-80px text-end pb-2">DESCRIPTION</th>
											<th class="min-w-50px text-end pb-2">IN HOUSE</th>
											<th class="min-w-60px text-end pb-2">UOM</th>
											<th class="min-w-150px text-center pb-2">QTY</th>
										</tr>
									</thead>
									<tbody class="fw-semibold fs-8">
										<!--begin::Products-->
										<tr>
											<!--begin::Product-->
											<td>
												<div class="fw-bold">SHIPPING FEE EXPRESS</div>
											</td>
											<!--end::Product-->
											<!--begin::Description-->
											<td class="text-end">SHIPPING FEE EXPRESS</td>
											<!--end::Description-->
											<!--begin::INHOUSE-->
											<td class="text-end">-</td>
											<!--end::INHOUSE-->
											<!--begin::UOM-->
											<td class="text-end">EA</td>
											<!--end::UOM-->
											<!--begin::QTY-->
											<td class="text-end">{{ $grn->tb_purchaseorder->tb_supplier->sup_shippingFee }}</td>
											<!--end::QTY-->
										</tr>
										<tr>
											<!--begin::Product-->
											<td>
												<div class="fw-bold">{{$grn->tb_purchaseorder->tb_purchaserequest->tb_product->prod_code}}
													{{$grn->tb_purchaseorder->tb_purchaserequest->tb_product->prod_name}}
												</div>
											</td>
											<!--end::Product-->
											<!--begin::DESC-->
											<td class="text-end">{{$grn->tb_purchaseorder->tb_purchaserequest->tb_product->prod_name}}</td>
											<!--end::DESC-->
											<!--begin::INHOUSE-->
											<td class="text-end">{{$grn->grn_inhouse}}</td>
											<!--end::INHOUSE-->
											<!--begin::UOM-->
											<td class="text-end">{{$grn->tb_purchaseorder->tb_purchaserequest->tb_uom->uom_desc}}</td>
											<!--end::UOM-->
											<!--begin::QTY-->
											<td class="text-end">{{$grn->tb_purchaseorder->po_total}}</td>
											<!--end::QTY-->
										</tr>
										<!--end::Products-->
										<!--begin::Total-->
										<tr>
											<td colspan="4" class="text-end"><b>TOTAL<b></td>
											<td class="text-end">{{ $grn->tb_purchaseorder->po_total + $grn->tb_purchaseorder->tb_supplier->sup_shippingFee }}</td>
										</tr>
										<!--end::Total-->
										<!--begin::Grand total-->
										<tr>
											<td colspan="4" class="text-end"><b>GRAND TOTAL<b></td>
											<td class="text-end">{{ $grn->tb_purchaseorder->po_total + $grn->tb_purchaseorder->tb_supplier->sup_shippingFee }}</td>
										</tr>
										<!--end::Grand total-->
									</tbody>
								</table>
							</div>
							<!--end::Table-->
							<!--end:Order summary-->
						</div>
					</div>
					<!--end::Wrapper-->
					<div class="text-sm font-weight-bold fs-8" align="center">
						& E.&O.E.
					</div>
					<div class="text-sm font-weight-bold fs-8" align="left">
						<strong>Receipient :</strong>{{$grn->grn_recipient}}
					</div>
				</div>
				<!--end::Body-->
				<!-- begin::Footer -->
				<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13 footer-section">
					<!-- begin::Actions -->
					<div class="my-1 me-5">
						<!-- begin::Print -->
						<button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
						<!-- end::Print -->
					</div>
					<!-- end::Actions -->
				</div>
				<!-- end::Footer -->
			</div>
			<!-- end::Wrapper-->
		</div>
		<!--end::Page-->
		@endforeach
	</div>
	<!--end::Content-->
	<!--end::Wrapper-->
</div>



@endsection