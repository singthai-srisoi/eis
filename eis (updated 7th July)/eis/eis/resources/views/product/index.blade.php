@extends('purchaser')

@section('title', 'Product')

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
		<li class="breadcrumb-item text-dark">Index</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="list-product">
	<!--begin::Container-->
	<div class="container-xxl" id="kt_content_container">
		<!--begin::Products-->
		<div class="card card-flush">
			<!--begin::Card header-->
			<div class="card-header align-items-center py-5 gap-2 gap-md-5">
				<!--begin::Card title-->
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-4">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" id="searchInput" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
					</div>
					<!--end::Search-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
					<div class="w-100 mw-150px">
						<!--begin::Select2--
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Category" data-kt-ecommerce-product-filter="status">
							<option></option>
							<option value="all">All</option>
							<option value="published">Published</option>
							<option value="scheduled">Scheduled</option>
							<option value="inactive">Inactive</option>
						</select>
						--end::Select2-->
					</div>
					<!--begin::Add product-->
					<a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
					<!--end::Add product-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->

            @if ($message = Session::get('success'))
                <!--begin::Alert-->
                <div class="alert alert-dismissible alert-primary d-flex align-items-center p-5 m-3">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h4 class="mb-1 text-dark">{{ $message }}</h4>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span class="path2"></span></i>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
            @endif

			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="ms-5 text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

							<th class="text-center">ID</th>
							<th class="text-center">Product Name</th>
							<th class="text-center">Product Image</th>
							<th class="text-center">Category</th>
							<th class="text-center">Description</th>
							<th class="text-center">Product Price</th>
							<th class="text-center">Selling Price</th>
							<th class="text-center">Stock</th>
							<th class="text-center">Supplier</th>
							<th class="text-end ">Actions</th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-semibold text-gray-600">
					@foreach ($product as $product)
						<tr>
							<!--begin::SKU=-->
							<td class="text-center pe-0">
								<span class="fw-bold">{{ $product->prod_id }}</span>
							</td>
							<!--end::Qty=-->
							<!--begin::SKU=-->
							<td class="text-center pe-0">
								<span class="fw-bold">{{ $product->prod_name }}</span>
							</td>
							<!--end::Qty=-->
							<!--begin::Price=-->
							<td class="text-center pe-0">
								<span class="fw-bold text-dark">{{ $product->prod_image }}</span>
							</td>
							<!--end::Price=-->
							<!--begin::Price=-->
							<td class="text-center pe-0">
								<span class="fw-bold text-dark">{{ $product->tb_productscategory->ctg_desc }}</span>
							</td>
							<!--end::Price=-->

							<!--begin::Price=-->
							<td class="text-center pe-0">
								<span class="fw-bold text-dark">{{ $product->prod_desc }}</span>
							</td>
							<!--end::Price=-->
							<!--begin::Status=-->
							<td class="text-end pe-0" data-order="Inactive">
								<span class="fw-bold text-dark">RM {{ $product->prod_price }}</span>
							</td>
							<td class="text-end pe-0" data-order="Inactive">
								<span class="fw-bold text-dark">RM {{ $product->prod_sellprice }}</span>
							</td>
							<td class="text-end pe-0" data-order="Inactive">
								<span class="fw-bold text-dark">{{ $product->prod_stock }}</span>
							</td>
							<!--end::Status=-->
							<!--begin::Price=-->
							<td class="text-center pe-0">
								<span class="fw-bold text-dark">{{ $product->tb_supplier->sup_name }}</span>
							</td>
							<!--end::Price=-->
							<!--begin::Price=-->
							<!-- <td class="text-center pe-0">
							</td> -->
							<!--end::Price=-->
							<!--begin::Action=-->
							<td class="text-end">
								<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></a>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{ route('product.edit',$product->prod_id) }}" class="menu-link px-3">Edit</a>
									</div>
									<!--begin::Menu item-->
									<div class="menu-item px-3">
									<a class="delete menu-link px-3" data-id="{{ $product->prod_id }}" data-bs-toggle="modal" data-bs-target="#kt_modal_1" data-kt-ecommerce-category-filter="delete_row">Delete</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">


								</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</td>
							<!--end::Action=-->
						</tr>
						<!--end::Table row-->
					@endforeach
					</tbody>

					<!--end::Table body-->
				</table>
				<!--end::Table-->


			</div>
			<!--end::Card body-->
		</div>
		<!--end::Products-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->

<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Modal title</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <form action="{{ route('product.destroy', 'id') }}" method="post">
                @csrf
                @method('DELETE')
                <input id="p_id" name="p_id" hidden>
                <div class="modal-body">
                    <p class="fs-2">Are you sure to delete this product?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {

        // Initialize DataTable with search functionality
        var table = $('#kt_ecommerce_products_table').DataTable({
            searching: true
        });

        // Add event listener to the search input field
        $('#searchInput').on('keyup', function () {
            table.search(this.value).draw();
        });


        $('.delete').on('click',function(){
            let id = $(this).attr('data-id');
            $('#pcid').val(id);
        });
    });
</script>

@stop
