@extends('template')
@section('purchaseReq-invoice')

<head>
    <style>
	@media print {
	    .footer-section {
	        display: none !important;
	    }

	    .table-responsive {
        overflow: visible !important;
        }
	}

	.table-lines-black table,
    .table-lines-black th,
    .table-lines-black td {
        border-color: black !important;

    }



    .table-lines-black tr.subtotal-row td {
        border-top: 1px solid black;
    }



	</style>

    <!-- Other head elements -->
</head>

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				    <!--begin::Container-->
				    <div class="container-xxl" id="kt_content_container">
				        <!-- begin::Invoice-->
				        <div class="card">
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
				                            <div class="text-sm-end font-weight-bold fs-2" align="right">
				                                <strong>PURCHASE REQUEST</strong>
				                            </div>
				                            <div class="text-sm-end font-weight-bold fs-6" align="right">
				                                <strong>PR{{ str_pad($pr->pr_id, 8, '0', STR_PAD_LEFT) }}</strong>
				                            </div>
				                            <div class="text-sm-end font-weight-bold fs-8" align="right">
				                                <div>CREATED DATE: {{ $pr->pr_cdate->format('d-m-Y') }}</div>
				                                <!--<div>JOB ORDER NUMBER: - </div>-->
				                                <div>PAGE: 1 of 1</div>
				                            </div>
				                            <!--end::Order details-->
				                            <!--begin:Order summary-->
				                            <div class="d-flex justify-content-between flex-column">
				                                <!--begin::Table-->
				                                <div class="table-responsive border-bottom mb-9">
				                                    <table class="table align-middle fs-7 gy-5 mb-0 table-lines-black">
				                                        <thead>
				                                            <tr class="border-bottom fs-6">
				                                                <th class="min-w-175px pb-2">ITEM CODE | PART NUMBER</th>
				                                                <th class="min-w-80px text-center pb-2">DELIVERY DATE</th>
				                                                <th class="min-w-50px text-center pb-2">QTY</th>
				                                                <th class="min-w-60px text-center pb-2">UOM</th>
				                                                <th class="min-w-150px text-center pb-2">SUPPLIER</th>
				                                                <th class="min-w-100px text-end pb-2">PRICE / UNIT</th>
				                                                <th class="min-w-100px text-end pb-2">Total</th>
				                                            </tr>
				                                        </thead>
				                                        <tbody class="fw-semibold fs-8">
				                                            <!--begin::Products-->
				                                            <tr>
				                                                <!--begin::Product-->
				                                                <td>
				                                                    <div class="fw-bold">{{ $pr->tb_product->prod_name }}</div>
				                                                </td>
				                                                <!--end::Product-->
				                                                <!--begin::Delivery Date-->
				                                                <td class="text-center">{{ $pr->pr_ddate }}</td>
				                                                <!--end::Delivery Date-->
				                                                <!--begin::Quantity-->
				                                                <td class="text-center">{{ $pr->pr_qty }}</td>
				                                                <!--end::Quantity-->
				                                                <!--begin::UOM-->
				                                                <td class="text-center">{{ $pr->tb_uom->uom_desc }}</td>
				                                                <!--end::UOM-->
				                                                <!--begin::Supplier-->
				                                                <td class="text-center">{{ $pr->tb_supplier->sup_name }}</td>
				                                                <!--end::Supplier-->
				                                                <!--begin::Price-->
				                                                <td class="text-end">MYR {{ number_format($pr->tb_product->prod_price, 2) }}</td>
				                                                <!--end::Price-->
				                                                <!--begin::Total-->
				                                                <td class="text-end">MYR {{ number_format($pr->tb_product->prod_price * $pr->pr_qty, 2) }}</td>
				                                                <!--end::Total-->
				                                            </tr>

															<tr>
				                                                <!--begin::Product-->
				                                                <td>
				                                                    <div class="fw-bold">Shipping Fee</div>
				                                                </td>
				                                                <!--end::Product-->
				                                                <!--begin::Delivery Date-->
				                                                <td class="text-center">{{ $pr->pr_ddate }}</td>
				                                                <!--end::Delivery Date-->
				                                                <!--begin::Quantity-->
				                                                <td class="text-center">1</td>
				                                                <!--end::Quantity-->
				                                                <!--begin::UOM-->
				                                                <td class="text-center">{{ $pr->tb_uom->uom_desc }}</td>
				                                                <!--end::UOM-->
				                                                <!--begin::Supplier-->
				                                                <td class="text-center">{{ $pr->tb_supplier->sup_name }}</td>
				                                                <!--end::Supplier-->
																<!--begin::shipping fee-->
				                                                <td class="text-end">MYR {{ number_format($pr->tb_supplier->sup_shippingFee, 2) }}</td>
				                                                <!--end::shipping fee-->
				                                                <!--begin::Total-->
				                                                <td class="text-end">MYR {{ number_format($pr->tb_supplier->sup_shippingFee, 2) }}</td>
				                                                <!--end::Total-->
				                                            </tr>

				                                            <!--end::Products-->
															<!--begin::Subtotal-->
                                                            <tr class="subtotal-row">
                                                                <td colspan="6" class="text-end">SUBTOTAL</td>
                                                                <td class="text-end">MYR {{ number_format($pr->pr_subtot, 2) }}</td>
                                                            </tr>
                                                            <!--end::Subtotal-->
                                                            <!--begin::TAX-->
                                                            <tr>
                                                                <td colspan="6" class="text-end">TAX {{ $pr->pr_tax }}%</td>
                                                                <td class="text-end">MYR {{ number_format($pr->pr_tax, 2) }}</td>
                                                            </tr>
                                                            <!--end::TAX-->
                                                            <!--begin::Grand total-->
                                                            <tr>
                                                                <td colspan="6" class="text-end">TOTAL</td>
                                                                <td class="text-end">MYR {{ number_format($pr->pr_total, 2) }}</td>
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
				                    <!-- begin::Footer -->
									<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13 footer-section">
									    <!-- begin::Actions -->
									    <div class="my-1 me-5">
									        <!-- begin::Print -->
									        <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
									        <!-- end::Print -->
									        <!-- begin::back to list -->
									        <a href="{{ route('purchaserequest/pr') }}" class="btn btn-primary my-1">Back to List</a>
									        <!-- end::back to list -->
									    </div>
									    <!-- end::Actions -->
									</div>
									<!-- end::Footer -->
				                </div>
				                <!-- end::Wrapper-->
				            </div>
				            <!--end::Page-->
				        </div>
				        <!--end::Content-->

				    </div>
				    <!--end::Wrapper-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->

		<style>
        @media print {
            body * {
                visibility: hidden;
            }
            #print-invoice,
            #print-invoice * {
                visibility: visible;
            }
            #print-invoice {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            #kt_footer {
                display: none;
            }
        }
    </style>

		<!--end::Javascript-->
	</body>
	<!--end::Body-->


@endsection
