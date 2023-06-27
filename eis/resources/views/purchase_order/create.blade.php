@extends('purchaser')

@section('title', 'Create Purchase Order')

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
        <li class="breadcrumb-item text-dark">Create</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body p-12">
                        <!--begin::Form-->
                        <form action="{{ route('purchase_order.store') }}" method="POST" id="kt_invoice_form">
                            @csrf
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start flex-xxl-row">
                                <!--begin::Input group-->
                                <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover">
                                    <span class="fs-2x fw-bold text-gray-800">Purchase Order</span>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-10"></div>
                            <!--end::Separator-->
                            <!--begin::Wrapper-->
                            <div class="mb-0">
                                <!--begin::Row-->
                                <div class="row gx-10 mb-3">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Purchase Request</label>
                                        <!--begin::Input group-->
                                        <select name="purchase_request" class="form-select mb-5" id="selectPR">
                                        </select>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-3">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Payment Term</label>
                                        <!--begin::Input group-->
                                        <div class="input-group input-group mb-5">
                                            <input name="payment_term" type="number" class="form-control" placeholder="Payment Term" value="{{ old('payment_term') }}">
                                            <span class="input-group-text" id="basic-addon2">Days</span>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-3">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Delivery To</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="delivery_to" class="form-control form-control" rows="4" placeholder="Delivery To">TSK SYNERGY SDN BHD&#10;NO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-3">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Buyer</label>
                                        <!--begin::Input group-->
                                            <input name="buyer" type="text" class="form-control" placeholder="Buyer" value="{{ old('buyer') }}">
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <br />
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="{{ route('purchase_order.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                            <!--end::Wrapper-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div>

<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

        $( "#selectPR" ).select2({
            placeholder:"Choose Purchase Request",
            templateResult: function (pr) {
                if (!pr.id) {
                    return pr.text;
                }
                return $(`<div class="d-flex justify-content-between flex-column flex-sm-row gap-7 gap-md-10">
                        <div class="d-flex flex-column fw-bold">

                            <div class="flex-root d-flex flex-column mb-1">
                                <span class="fs-5">${pr.text}</span>
                            </div>
                            <div class="d-flex text-gray-800 fs-6">
                                <div class="fw-semibold pe-5">${pr.product}</div>
                            </div>
                            <div class="d-flex text-gray-800 fs-6">
                                <div class="fw-semibold pe-5">${pr.supplier}</div>
                            </div>
                        </div>

                    <div class="d-flex flex-column fw-bold mt-auto mb-auto w-25">
                        <div class="d-flex text-gray-800 fs-6">
                            <div class="text-muted text-end">${pr.date}</div>
                        </div>
                        <div class="d-flex text-gray-800 fs-6">
                            <div class="text-muted text-end">${pr.total.toFixed(2)} MYR</div>
                        </div>
                    </div>
                </div>`);
            },
            ajax: {
                url: "{{route('PurchaseRequest.getPR')}}",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                return {
                    _token: CSRF_TOKEN,
                    search: params.term // search term
                };
                },
                processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }

        });

    });
</script>

@stop
