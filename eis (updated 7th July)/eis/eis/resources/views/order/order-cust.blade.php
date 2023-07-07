@extends('templatecust')	
@section('order_content')			

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="order_content">
	<!--begin::Container-->
	<div class="container-xxl" id="order_content_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#order_hist_container', lg: '#kt_header_container'}">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Shopping Cart</h1>
			<!--end::Heading-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
				<li class="breadcrumb-item text-muted">
					<a href="{{url('product-cust')}}" class="text-muted">Home</a>
				</li>
				<li class="breadcrumb-item text-dark">Shopping Cart</li>
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title=-->
		<!--begin::Form-->
		
			
			<!--begin::Main column-->
			<div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
				<!--begin::Order details-->
				<div class="card card-flush py-4">
					<!--begin::Card header-->
					<div class="card-header">
						<div class="card-title">
							<h2>Products in Cart</h2>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<div class="d-flex flex-column gap-10">
							
							<!--begin::Table-->
							<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_edit_order_product_table">
								<!--begin::Table head-->
								<thead>
									<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
										<th class="min-w-200px">Product</th>
										<th class="min-w-100px pe-5">Quantity</th>
										<th class="min-w-100px pe-5">Total</th>
										<th class="min-w-50 text-end pe-5"></th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody class="fw-semibold text-gray-600">
									@php $total = 0 @endphp
									@if(session('cart'))
										@foreach(session('cart') as $id => $cart)
										@php $total += $cart['prod_sellprice'] * $cart['quantity'] @endphp
										
									<!--begin::Table row-->
									<tr data-id="{{ $id }}">
										<!--begin::Product=-->
										<td data-th="Product">
											<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_1">
												<!--begin::Thumbnail-->
												<div class="symbol symbol-50px">
													<span class="symbol-label" style="background-image:url('{{ asset('assets/media/products/' . $cart['prod_image']) }}');"></span>
												</div>
												<!--end::Thumbnail-->
												<div class="ms-5">
													<!--begin::Title-->
													<div class="text-gray-800 fs-5 fw-bold">{{$cart['prod_name']}}</div>
													<!--end::Title-->
													<!--begin::Price-->
													<div class="fw-semibold fs-7">Price: RM
													<span data-kt-ecommerce-edit-order-filter="price">{{$cart['prod_sellprice']}}</span></div>
													<!--end::Price-->
												</div>
											</div>
										</td>
										<!--end::Product=-->
										<!--begin::Qty=-->
										<td class="pe-5" data-th="Quantity">
											<div class="d-flex align-items-center">
											<button class="btn btn-sm btn-light-danger btn-icon-danger btn-icon w-25px h-25px me-2 btn-decrement">
													<i class="bi bi-dash-lg"></i></button>
											<input type="text" class="fw-bold me-2 form-control w-40px h-40px quantity cart-update" value="{{$cart['quantity']}}" style="border: none;">
											<button class="btn btn-sm btn-light-success btn-icon w-25px h-25px btn-increment">
													<i class="bi bi-plus-lg"></i></button>
											</div>
										</td>
										<td class="pe-5" data-th="">
											RM {{$cart['prod_sellprice'] * $cart['quantity']}}
										</td>
										<td class="text-end pe-5 actions" data-th="">
											<button class="btn btn-sm btn-light-danger btn-icon-danger btn-icon w-25px h-25px me-2 cart_remove">
											<i class="bi bi-trash3-fill"></i></button>
										</td>
										<!--end::Qty=-->
									</tr>
									<!--end::Table row-->
									@endforeach
									@endif
								</tbody>
								<!--end::Table body-->
							
							</table>
							<!--end::Table-->
					
							<!--begin::Total price-->
							@php $shipping = 0 @endphp
							<div colspan="6" class="text-end fs-5 fw-semibold">Subtotal: RM {{$total}}</div>
							@if(session('cart') && count(session('cart')) > 0)
								@php $shipping = 15.0 @endphp
								<div colspan="6" class="text-end fs-5 fw-semibold">Shipping Fee: RM {{$shipping}}.00</div>
							@endif
								<div colspan="6" class="fs-3 text-dark text-end">Grand Total: 
								<span class="text-dark fs-3 fw-bolder text-end">RM {{$total+$shipping}}</span></div>
							<!--end::Total price-->
							<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href = "{{url('address')}}">
								<span class="indicator-label">Place Order</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</a>
							<!--end::Button-->
							</div>
							
						</div>
					</div>
					<!--end::Card header-->
				</div>
				<!--end::Order details-->
				<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Do you really want to remove this product?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-danger" id="confirmRemove">Remove</button>
						</div>
						</div>
					</div>
					</div>
				</div>
			<!--end::Main column-->
		
		<!--end::Form-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->

@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
    
		$(".cart-update").change(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        $.ajax({
            url: '{{ route('update-cart')}}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    	});

		$(".btn-increment").click(function (e) {
			e.preventDefault();

			var quantityInput = $(this).siblings(".quantity");
			var currentQuantity = parseInt(quantityInput.val());
			quantityInput.val(currentQuantity + 1);
			quantityInput.trigger("change");
		});

		$(".btn-decrement").click(function (e) {
			e.preventDefault();

			var quantityInput = $(this).siblings(".quantity");
			var currentQuantity = parseInt(quantityInput.val());
			if (currentQuantity > 1) {
				quantityInput.val(currentQuantity - 1);
				quantityInput.trigger("change");
			}
		});

    
    $(".cart_remove").click(function (e) {
		e.preventDefault();

		var ele = $(this);

		$('#confirmationModal').modal('show');

		$('#confirmRemove').click(function() {
			$('#confirmationModal').modal('hide');
			
			$.ajax({
			url: '{{ route('remove-from-cart') }}',
			method: "DELETE",
			data: {
				_token: '{{ csrf_token() }}', 
				id: ele.parents("tr").attr("data-id")
			},
			success: function (response) {
				window.location.reload();
			}
			});
		});
		});
	});

</script>
@endsection