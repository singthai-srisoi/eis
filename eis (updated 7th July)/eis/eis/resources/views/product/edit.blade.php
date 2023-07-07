@extends('purchaser')

@section('title', 'Edit Product')

@section('PageTitle')
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Product</h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="#" class="text-muted">Home</a>
        </li>
        <li class="breadcrumb-item text-muted">Product</li>
        <li class="breadcrumb-item text-dark">Edit</li>
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
                        <form action="{{ route('product.update',$product->prod_id) }}" method="POST" id="kt_invoice_form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start flex-xxl-row">
                                <!--begin::Input group-->
                                <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover">
                                    <span class="fs-2x fw-bold text-gray-800">Product</span>
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
								 <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Product Code</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input name="p_code" class="form-control form-control" placeholder="Product Code" value="{{ $product->prod_code }}">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                 <!--begin::Row-->
								 <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Product Name</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input name="p_name" class="form-control form-control" rows="1" placeholder="Product Name" value="{{ $product->prod_name }}" >
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Product Image</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="file" class="form-control" name="p_image" class="form-control form-control" placeholder="Product Image">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Product Category</label>
                                        <!--begin::Input group-->
                                        <select name="p_ctg" class="form-select mb-5" id="selectPC">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->ctg_id }}" {{$product->p_ctg == $category->ctg_id ? 'selected' : ''}}>{{ $category->ctg_desc}}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Product Description</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="p_desc" class="form-control form-control" rows="2" placeholder="Product Description">{{ $product->prod_desc }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Product Price</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="number" name="p_price" class="form-control form-control" placeholder="Product Price" value="{{ $product->prod_price}}">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Selling Price</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="number" name="p_sellPrice" class="form-control form-control" placeholder="Selling Price" value="{{ $product->prod_sellprice}}">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
								<!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Stock</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="number" name="p_stock" class="form-control form-control" placeholder="Stock" value="{{ $product->prod_stock }}">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
								<!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Supplier ID</label>
                                        <!--begin::Input group-->
                                        <select name="p_supplierID" class="form-select mb-5" id="selectS">
                                            @foreach($suppliers as $supplier)
                                                <option value="{{ $supplier->sup_id }}" {{$product->prod_supplierID == $supplier->sup_id ? 'selected' : ''}}>{{ $supplier->sup_name}}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
								<!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Status</label>
                                        <!--begin::Input group-->
                                        <select name="p_status" class="form-select mb-5">
                                            <option>Choose Status</option>
                                            @foreach($statuses as $status)
                                                <option value="{{ $status->ps_id }}" {{$product->prod_status == $status->ps_id ? 'selected' : ''}}>{{ $status->ps_desc}}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
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
    $(document).ready(function(){

        $( "#selectPC" ).select2({
            placeholder:"Choose Category"
        });

        $( "#selectS" ).select2({
            placeholder:"Choose Supplier"
        });

    });

</script>

@stop
