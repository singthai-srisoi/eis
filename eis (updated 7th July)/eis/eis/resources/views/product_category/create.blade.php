@extends('purchaser')

@section('title', 'Add Product Category')

@section('PageTitle')
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Add Product Category</h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="#" class="text-muted">Home</a>
        </li>
        <li class="breadcrumb-item text-muted">Product Category</li>
        <li class="breadcrumb-item text-dark">Add Category</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">

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

        <form action="{{ route('product_category.store') }}" method="POST" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="">
            @csrf
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>New Category</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Category Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="category_name" class="form-control mb-2" placeholder="Product category name" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="d-flex justify-content-start">
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_category_submit mx-1" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <a href="{{ route('product_category.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light mx-5">Cancel</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
    </div>
    <!--end::Container-->
</div>
@stop
