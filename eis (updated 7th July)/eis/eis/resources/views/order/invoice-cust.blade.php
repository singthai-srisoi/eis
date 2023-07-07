@extends('templatecust')
@section('invoice')
@php
use Carbon\Carbon;
@endphp

<style>
    body {
        background-color: white;
        margin: 0;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    p {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
    }

    .brand-section {
        background-color: white;
        padding: 0px 0px;
    }

    .logo img {
        width: 150%;
    }

    .logo-container {
        float: left;
    }

    .sign img {
        width: 150%;
        height: auto;
    }

    .sign-container {
        float: right;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-6 {
        width: 50%;
        flex: 0 0 auto;
    }

    .text-black {
        color: black;
        font-size: 9px;
    }

    .company-details {
        float: right;
        text-align: right;
    }

    .body-section {
        padding: 16px;
        border: 1px solid gray;
    }

    .heading {
        font-size: 14px;
        margin-bottom: 08px;
    }

    .sub-heading {
        color: #262626;
        margin-bottom: 05px;
    }

    table {
        background-color: #fff;
        width: 100%;
        border-collapse: collapse;
    }

    table thead tr {
        border: 1px solid #111;
        background-color: #f2f2f2;
    }

    table td {
        vertical-align: middle !important;
        text-align: center;
    }

    table th,
    table td {
        padding-top: 08px;
        padding-bottom: 08px;
    }

    .table-bordered {
        box-shadow: 0px 0px 5px 0.5px gray;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6;
    }

    .text-right {
        text-align: end;
    }

    .text-left {
        text-align: left;
        padding-left: 7px;
    }

    .text-center {
        text-align: center;
        font-size: 10px;
        padding-left: 7px;
    }

    .w-20 {
        width: 20%;
    }

    .float-right {
        float: right;
    }

    .float-left {
        float: left;
    }

    pre {
        border-left: 8px solid #4682b4;
        padding: 3px;
        font-size: 7px;
        line-height: 1;
        margin: 0;
    }

    code {
        display: block;
        margin: 0;
        padding-left: 1px;
        text-align: center;
    }

    .separator {
        border-top: 2px solid lightgray;
        margin: 0px 0;
    }
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="invoice">
    <div class="container" id="print-container">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Invoice</h1>
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{url('product-cust')}}" class="text-muted">Order</a>
                </li>
                <li class="breadcrumb-item text-dark">Invoice</li>
            </ul>
            <!--end::Breadcrumb-->
            <!--end::Heading-->
        </div>
        <!--end::Page title=-->
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <div class="logo-container">
                        <div class="logo">
                            <a href="#" class="d-block mw-150px">
                                <img alt="Logo" src="/assets/media/svg/brand-logos/tsk.png" class="float-left" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <h3 class="heading">TSK SYNERGY SDN BHD</h3>
                        <p class="text-black" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">NO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.</p>
                        <p class="text-black">TEL : 07-5950803</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>


        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <p class="sub-heading">ORDER FROM: </p>
                    <p class="sub-heading"> Koko </p>
                </div>
                <div class="col-6">
                    <h1 class="heading text-right">INVOICE</h1>
                    <p class="heading text-right">TSK-{{ str_pad($id['o_id'], 8, '0', STR_PAD_LEFT) }}</p>
                    <p class="text-right">DATE ISSUED: {{ Carbon::parse($id['o_dateIssued'])->format('Y-m-d') }}</p>
                    <p class="text-right">DELIVERY ORDER NUMBER : DO{{ $id->o_deliveryOrder }}</p>
                    <p class="text-right">JOB ORDER NUMBER : JO{{ $id->o_jobOrder }}</p>
                    <p class="text-right">SALES ORDER NUMBER : SO{{ $id->o_salesOrder }}</p>
                    <p class="text-right">TERMS : {{ $id->o_terms }}</p>
                    <p class="text-right">PAGE : 1</p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th class="w-20">ITEM CODE | PART NUMBER </th>
                        <th class="w-20">CUST-PO </th>
                        <th class="w-20">PROJECT</th>
                        <th class="w-15">QTY</th>
                        <th class="w-20">UOM</th>
                        <th class="w-20">UNIT</th>
                        <th class="w-25">AMOUNT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $subAmount = 0; ?>
                    @foreach ($orders as $order)
                    @php $total = 0 @endphp
                    @php $total += $order->oItem_totalprice @endphp
                    <tr>
                        <td>
                            @if($order->tb_product)
                            {{ $order->tb_product->prod_name }}
                            @else
                            No associated product found for this order.
                            @endif
                        </td>
                        <td>{{ $order->oItem_purchaseOrder }}</td>
                        <td>{{ $order->oItem_project }}</td>
                        <td>{{ $order->oItem_qty }}</td>
                        <td>{{ $order->oItem_uom }}</td>
                        <td>MYR {{ $order->tb_product->prod_sellprice }}</td>
                        <td>MYR {{ $order->oItem_totalprice }}</td>
                        <!-- <td>MYR {{ $amount = $order->oItem_unitAmount * $order->oItem_qty }}</td>
                    <?php $subAmount += $order->oItem_totalprice; ?> -->
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" class="text-right">SUB AMOUNT</td>
                        <td>{{ $subAmount }} </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-right">Tax 0%</td>
                        <td>{{ $id->o_tax }} </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-right">TOTAL AMOUNT</td>
                        <td>{{ $totalamount = $subAmount + $id->o_tax }} </td>
                    </tr>
                </tbody>
            </table>
            <br>

            <!-- start note and remark -->
            <div class="brand-section">

                <pre>
                 <span class="heading text-left">NOTE:</span> 
                 <p class="text-left">EQUIVALENT TO MYR</p>
                 <p class="text-left">Exchanged rate : {{ $id->o_rate }} </p> 
                 <p class="text-left">Tax 0% : {{ $id->o_tax }} </p>
                 <p class="text-left">Final Total Amount : {{ $totalamount }} </p>

		         <div class="separator"></div>

                 <span class="heading text-left">REMARK :</span> 
                 <p class="text-left">*Interest of 2% per month will be imposed for all overdue payment.</p>
                 <p class="text-left">*Please notify use in writing of any discrepancy within 7 days from the date of this invoice.</p>
                 <p class="text-left">*All cheques should be crossed and made payable to:  </p>
                 <p class="text-left">TSK SYNERGY SDN BHD</p>
                 <p class="text-left">CIMB : 8010221537</p>
            </pre>

                <!-- end note and remark -->
            </div>
            <!-- start sign -->

            <h4 class="heading text-right">INITIAL SIGNATURE,</h4>
            <div class="sign-container">
                <div class="sign">
                    <a href="#" class="d-block mw-100px">
                        <img alt="Sign" src="/assets/media/svg/brand-logos/signature.png" class="float-right" />
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <p class="text-right">IT MANAGER</p>
            <!-- end sign -->
            <br>
            <br>


            <p class="text-center">THIS IS COMPUTER GENERATED DOCUMENT AND NO SIGNATURE IS REQUIRED</p>
        </div>
        <div class="mt-3 text-end">
            <!-- begin::Print--> 
            <a href="{{url('order-history-cust', session('user')['u_id'])}}" type="button" class="btn btn-primary my-1 me-5">Back</a>
            <button type="button" class="btn btn-success my-1 me-5" onclick="window.print();">Print Invoice</button>
            <!-- end::Print-->
        </div>
    </div>
    <!--end::Content-->

    @endsection