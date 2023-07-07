@extends('template')
@section('list-product')

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
						<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
					</div>
					<!--end::Search-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
					<div class="w-100 mw-150px">
						<!--begin::Select2-->
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
							<option></option>
							<option value="all">All</option>
							<option value="published">Published</option>
							<option value="scheduled">Scheduled</option>
							<option value="inactive">Inactive</option>
						</select>
						<!--end::Select2-->
					</div>
					<!--begin::Add product-->
					<!--<a href="add-product" class="btn btn-primary">Add Product</a> -->
					<!--end::Add product-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->									
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="ms-5 text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">												
							
							<th class="d-flex align-items-start">Product Code</th>
							<th class="text-center">Product Name</th>							
							<th class="text-center">Stock</th>
							<th class="text-center">Supplier Price</th>
							<th class="text-center">Selling Price</th>
							<th class="text-center">Status</th>
							<th class="text-center ">Actions</th>
						</tr>											
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					@foreach($c as $c)
					<tbody class="fw-semibold text-gray-600">			
						<tr>
							<td>
								<div class="d-flex align-items-left" data-order="Inactive">														
									<div class="">
										<!--begin::Title-->
										<a href="../../demo3/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">
										{{ $c['prod_code'] }} 
										</a>
										<!--end::Title-->
									</div>
								</div>
							</td>
							<!--end::Category=-->
							<!--begin::SKU=-->
							<td class="text pe-0 d-flex align-items-start ms-5" data-order="Inactive">
								<span class="fw-bold">{{ $c['prod_name'] }}	</span>
							</td>							
							<!--end::Qty=-->
							<!--begin::Price=-->
							<td class="text-center" data-order="Inactive">
								<span class="fw-bold text-dark">{{ $c['prod_stock'] }}</span>
							</td>
							<!--end::Price=-->												
							<!--begin::Status=-->
							<td class="text-center pe-0" data-order="Inactive">
								<span class="fw-bold text-dark">RM{{$c['prod_price']}}</span>
							</td>
							<td class="text-center pe-0" data-order="Inactive">
								<span class="fw-bold text-dark">RM{{$c['prod_sellprice']}}</span>
							</td>							
							<td class="text-center pe-0" data-order="Inactive">								
								<span class="fw-bold text-dark">{{ $c->tb_productstatus->ps_desc }}</span>							
								
							</td>
							<!--end::Status=-->
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
										<a href="purchaseReq-form" class="menu-link px-3">Create Purchase Request</a>
									</div>
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{ "update/" . $c['prod_id'] }}" class="menu-link px-3">Update</a>
									</div>
									<!--end::Menu item-->
									<div class="menu-item px-3">									
									<a href="{{ route('deletes', ['prod_id' => $c['prod_id']]) }}" class="menu-link px-3" onclick="return confirm('Are you sure you want to delete this product?')" data-kt-ecommerce-product-filter="delete_row">Delete</a>
									</div>  
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
					</tbody>
					@endforeach	
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
				
@endsection
