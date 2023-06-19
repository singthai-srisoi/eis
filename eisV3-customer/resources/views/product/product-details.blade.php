@extends('template')
@section('p_details')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#order_hist_container', lg: '#kt_header_container'}">
            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Product Details</h1>
            <!--end::Heading-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{url('product-cust')}}" class="text-muted">Home</a>
                </li>
                <li class="breadcrumb-item text-dark">Product</li>
                <li class="breadcrumb-item text-dark">Product Details</li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title=-->
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-lg-12 mb-12 mb-lg-0">
                <!--begin::Card-->
                <div class="card card-flush pt-3 mb-5 mb-xl-12">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bold">Product Details</h2>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="{{ url()->previous() }}" class="btn btn-light-info btn-sm mx-2"><i class="bi bi-arrow-left"></i></a>
                            <a href="{{ route('add-to-cart', $product->prod_code) }}" class="btn btn-light-success btn-sm"><i class="bi bi-cart-fill"></i>Add to cart</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-3">
                        <!--begin::Section-->
                        <div class="mb-10">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4 align-items-center text-center">
                                <div class="card-rounded min-h-75px">
                                    <img src="{{ asset('assets/media/products/' . $product['prod_image']) }}" alt="{{$product['prod_name']}}" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap py-5">
                                <!--begin::Row-->
                                <div class="flex-equal me-5">
                                    <!--begin::Details-->
                                    <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                        <!--begin::Row-->
                                        <tr>
                                            <td class="text-gray-400 min-w-175px w-175px">Product Name: </td>
                                            <td class="text-gray-800 min-w-200px">{{$product['prod_name']}}</td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr>
                                            <td class="text-gray-400">Price: </td>
                                            <td class="text-gray-800">RM {{$product['prod_sellprice']}}</td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr>
                                            <td class="text-gray-400">Stock: </td>
                                            <td class="text-gray-800 mx-2">{{$product['prod_stock']}}
                                                @if ($product->prod_stock > 10)
                                                <div class="badge badge-light-success">In stock</div>
                                                @elseif ($product->prod_stock == 0)
                                                <div class="badge badge-light-danger">Out of stock</div>
                                                @else
                                                <div class="badge badge-light-warning">Low in stock</div>
                                                @endif
                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr>
                                            <td class="text-gray-400">Category: </td>
                                            <td class="text-gray-800">{{$product->tb_productscategory->ctg_desc}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-400 mt-3">Description: </td>
                                            <td class="text-gray-800" style="text-align: justify;">{{$product['prod_desc']}}</td>
                                        </tr>
                                        <!--end::Row-->
                                    </table>
                                    <!--end::Details-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->

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
<!--end::Content-->

@endsection