@extends('purchaser')

@section('title', 'Purchase Order')

@section('PageTitle')
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Purchase Order</h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="#" class="text-muted">Home</a>
        </li>
        <li class="breadcrumb-item text-muted">Purchase Order</li>
        <li class="breadcrumb-item text-dark">Details</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!-- begin::Invoice 3-->
        <div class="card">
            <!-- begin::Body-->
            <div class="card-body py-20">
                <!-- begin::Wrapper-->
                <div class="mw-lg-950px mx-auto w-100">
                    <!-- begin::Header-->
                    <div class="d-flex justify-content-between flex-column flex-sm-row">
                        <div class="d-block mw-150px ms-sm-auto">
                            <img alt="Logo" src="assets/media/logos/TSK-Logo.png" class="w-100" />
                        </div>
                        <div class="text-sm-end">
                            <!--begin::Text-->
                            <div class="text-sm-end fw-semibold fs-4 text-muted">
                                <h1>TSK SYNERGY SDN BHD</h1>
                                <div>NO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.</div>
                                <div>Tel: 07-5950803</div>
                            </div>
                            <!--end::Text-->
                        </div>
                    </div>
                    <hr>
                    <div class="text-sm-end">
                        <!--begin::Text-->
                            <h4 class="fw-bolder text-gray-800 fs-2qx">PURCHASE&nbsp;ORDER</h4>
                            <h4 class="fw-bolder text-gray-800 fs-1">PO{{ str_pad($purchaseorder->po_id,8,"0",STR_PAD_LEFT) }}</h4>
                        <!--end::Text-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="pb-12">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column gap-7 gap-md-10">


                            <div class="d-flex justify-content-between flex-column flex-sm-row gap-7 gap-md-10">
                                <!--begin::Content-->
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-column fw-bold">

                                        <div class="flex-root d-flex flex-column mb-1">
                                            <span class="text-muted">TO:</span>
                                            <span class="fs-5">{{ $purchaserequest->tb_supplier->sup_name }} ({{ $purchaserequest->tb_supplier->sup_shop }})</span>
                                            <div class="fs-5">
                                                {{ $purchaserequest->tb_supplier->sup_address==null ? '-' :  $purchaserequest->tb_supplier->sup_address }}
                                            </div>
                                        </div>

                                        <!--begin::Item-->
                                        <div class="d-flex text-gray-800 fs-6">
                                            <!--begin::Accountname-->
                                            <div class="fw-semibold pe-5">TEL:</div>
                                            <!--end::Accountname-->

                                            <!--begin::Label-->
                                            <div class="text-end fw-norma">{{ $purchaserequest->tb_supplier->sup_tel }}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex text-gray-800 fs-6">
                                            <!--begin::Accountnumber-->
                                            <div class="fw-semibold pe-5">FAX:</div>
                                            <!--end::Accountnumber-->

                                            <!--begin::Number-->
                                            <div class="text-end fw-norma">{{ $purchaserequest->tb_supplier->sup_fax }}</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex text-gray-800 fs-6">
                                            <!--begin::Code-->
                                            <div class="fw-semibold  pe-5">EMAIL:</div>
                                            <!--end::Code-->

                                            <!--begin::Label-->
                                            <div class="fw-norma">{{ $purchaserequest->tb_supplier->sup_email }}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <br/>
                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">DELIVERY TO:</span>
                                            <span class="fs-5"><?php echo nl2br($purchaseorder->po_deliveryTo); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Content-->

                                <div class="d-flex flex-column fw-bold mt-auto mb-auto mw-md-300px w-50">

                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack text-gray-800 fs-6">
                                        <!--begin::Accountname-->
                                        <div class="fw-semibold pe-5">CREATED DATE:</div>
                                        <!--end::Accountname-->

                                        <!--begin::Label-->
                                        <div class="text-end fw-norma">{{ $purchaseorder->po_cdate->todatestring() }}</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack text-gray-800 fs-6">
                                        <!--begin::Accountnumber-->
                                        <div class="fw-semibold pe-5">PAYMENT TERM:</div>
                                        <!--end::Accountnumber-->

                                        <!--begin::Number-->
                                        <div class="text-end fw-norma">{{ $purchaseorder->po_paymentTerm }} Days</div>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack text-gray-800 fs-6">
                                        <!--begin::Code-->
                                        <div class="fw-semibold pe-5">BUYER:</div>
                                        <!--end::Code-->

                                        <!--begin::Label-->
                                        <div class="text-end fw-norma">{{ $purchaseorder->po_buyer }}</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>



                            <!--begin:Order summary-->
                            <div class="d-flex justify-content-between flex-column">
                                <!--begin::Table-->
                                <div class="table-responsive border-bottom mb-9">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bold">
                                                <th class="min-w-30px pb-2">#</th>
                                                <th class="min-w-175px pb-2">ITEM CODE | PART NUMBER</th>
                                                <th class="min-w-70px text-end pb-2">DELIVERY DATE</th>
                                                <th class="min-w-50px text-end pb-2">QTY</th>
                                                <th class="min-w-50px text-end pb-2">UOM</th>
                                                <th class="min-w-80px text-end pb-2">PRICE /UNIT</th>
                                                <th class="min-w-100px text-end pb-2">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold">
                                            <!--begin::Products-->
                                            <tr>
                                                <!--begin::#-->
                                                <td>1</td>
                                                <!--end::#-->
                                                <!--begin::Product-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Title-->
                                                        <div class="ms-5">
                                                            <div class="fw-bold">{{ $product->prod_name }}</div>
                                                            <div class="fs-7">{{ $product->prod_code }}</div>
                                                            <div class="fs-7 text-muted">Category: {{ $product->tb_productscategory->ctg_desc }}</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                </td>
                                                <!--end::Product-->
                                                <!--begin::SKU-->
                                                <td class="text-end">{{ $purchaserequest->pr_ddate }}</td>
                                                <!--end::SKU-->
                                                <td class="text-end">{{ $purchaserequest->pr_qty }}</td>
                                                <td class="text-end">{{ $purchaserequest->tb_uom->uom_desc }}</td>
                                                <!--begin::Quantity-->
                                                <td class="text-end">MYR<br/>{{ number_format($product->prod_price,2) }}</td>
                                                <!--begin::Total-->
                                                <td class="text-end">MYR<br/>{{ number_format($product->prod_price*$purchaserequest->pr_qty,2) }}</td>
                                                <!--end::Total-->
                                            </tr>
                                            <tr>
                                                <!--begin::#-->
                                                <td>2</td>
                                                <!--end::#-->
                                                <!--begin::Product-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Title-->
                                                        <div class="ms-5">
                                                            <div class="fw-bold">SHIPPING FEE EXPRESS</div>
                                                            <div class="fs-7 text-muted">Category: SHIPPING</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                </td>
                                                <!--end::Product-->
                                                <!--begin::SKU-->
                                                <td class="text-end">{{ $purchaserequest->pr_ddate }}</td>
                                                <!--end::SKU-->
                                                <td class="text-end">1</td>
                                                <td class="text-end">{{ $purchaserequest->tb_uom->uom_desc }}</td>
                                                <!--begin::Quantity-->
                                                <td class="text-end">MYR<br/>{{ number_format($purchaserequest->tb_supplier->sup_shippingFee,2) }}</td>
                                                <!--begin::Total-->
                                                <td class="text-end">MYR<br/>{{ number_format($purchaserequest->tb_supplier->sup_shippingFee,2) }}</td>
                                                <!--end::Total-->
                                            </tr>
                                            <!--end::Products-->
                                            <!--begin::Subtotal-->
                                            <tr>
                                                <td colspan="6" class="text-end">SUBTOTAL</td>
                                                <td class="text-end">{{ number_format($purchaserequest->pr_subtot,2) }} MYR</td>
                                            </tr>
                                            <!--end::Subtotal-->
                                            <!--begin::VAT-->
                                            <tr>
                                                <td colspan="6" class="text-end">TAX ({{ number_format($purchaserequest->pr_tax,2) }}%)</td>
                                                <td class="text-end">{{ number_format($purchaserequest->pr_subtot*$purchaserequest->pr_tax/100,2) }} MYR</td>
                                            </tr>
                                            <!--end::VAT-->
                                            <!--begin::Grand total-->
                                            <tr>
                                                <td colspan="6" class="fs-3 text-dark fw-bold text-end">TOTAL</td>
                                                <td class="text-dark fs-3 fw-bolder text-end">{{ number_format($purchaserequest->pr_total,2) }} MYR</td>
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
                        </div>
                        <!-- end::Actions-->
                        <!-- begin::Action-->
                        <a href="{{ route('purchase_order.index') }}" class="btn btn-secondary my-1">Back</a>
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
@stop
