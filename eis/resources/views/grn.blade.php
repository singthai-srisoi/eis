@extends('template')
@section('content')

<!--begin::Tables Widget 9-->
<div class="card mb-5 mb-xl-10">

	<div class="card mb-5 mb-xl-10">
		<!--begin::Header-->
		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bold fs-3 mb-1">Good Receive Notes List</span>
			</h3>
			<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add  a GRN">
				<a href="add-grn" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_grn">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
					<span class="svg-icon svg-icon-3">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
							<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->Add New</a>

				<!--begin::Modals-->
				<!--begin::Modal - New GRN-->
				<div class="modal fade" id="kt_modal_new_grn" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Form-->
							<form class="form" method="POST" action="{{url('grn')}}" id="kt_modal_new_grn_form">
								@csrf
								<!--begin::Modal header-->
								<div class="modal-header" id="kt_modal_new_grn_header">
									<!--begin::Modal title-->
									<h2>Add Good Receive Notes</h2>
									<!--end::Modal title-->
									<!--begin::Close-->
									<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Close-->
								</div>
								<!--end::Modal header-->
								<!--begin::Modal body-->
								<div class="modal-body py-10 px-lg-17">
									<!--begin::Scroll-->
									<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-5 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
												<span class="required">Purchase Order Number</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
											</label>
											<!--end::Label-->
											<!--begin::Select-->
											<select name="grn_poid" data-control="select2" class="form-select form-select-solid">
												@foreach ($purchaseOrders as $po)
												<option value="{{ $po->po_id }}">{{ $po->po_id }}</option>
												@endforeach
											</select>
											<!--end::Select-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-5 fv-row">
											<!--begin::Label-->
											<label class="required fs-5 fw-semibold mb-2">Delivery Order Date</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" type="date" style="width: 150px" name="grn_deliverydate" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-5 fv-row">
											<!--begin::Label-->
											<label class="required fs-5 fw-semibold mb-2">Delivery Order Number</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="grn_deliveryOrderNum" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-5 fv-row">
											<!--begin::Label-->
											<label class="fs-5 fw-semibold mb-2">In House</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="grn_inhouse" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-5 fv-row">
											<!--begin::Label-->
											<label class="required fs-5 fw-semibold mb-2">Recipient</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="grn_recipient" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Scroll-->
								</div>
								<!--end::Modal body-->
								<!--begin::Modal footer-->
								<div class="modal-footer flex-center">
									<!--begin::Button-->
									<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
									<!--end::Button-->
									<!--begin::Button-->
									<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<!--end::Button-->
								</div>
								<!--end::Modal footer-->
							</form>
							<!--end::Form-->
						</div>
					</div>
				</div>
				<!--end::Modal - New GRN-->
			</div>
		</div>
		<!--end::Header-->



		<!--begin::Body-->
		<div class="card-body py-3">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">

					<!--begin::Table head-->
					<thead>
						<tr class="fw-bold text-muted">
							<th class="min-w-50px">#</th>
							<th class="min-w-50px">GRN Number</th>
							<th class="min-w-50px">Purchase Order Number</th>
							<th class="min-w-150px">Item</th>
							<th class="min-w-100px">Delivery Number</th>
							<th class="min-w-50px">Delivery Date</th>
							<th class="min-w-50px">Total Price</th>
							<th class="min-w-50px">Recipient</th>
							<th class="min-w-50px">Actions</th>
						</tr>
					</thead>
					<!--end::Table head-->

					<!--begin::Table body-->
					<tbody>
						@foreach($grn as $grn)
						<tr>
							<td>
								<div class="d-flex align-items-center">
									<div class="d-flex justify-content-start flex-column">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-6">
											{{ $loop->iteration }}
										</a>
									</div>
								</div>
							</td>

							<td>
								<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">
									GRN {{ $grn->grn_id }}
								</a>
							</td>

							<td>
								<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">
									PO {{ $grn->grn_poid }}
								</a>
							</td>

							<td>
								<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">
									{{ $grn->tb_purchaseorder->tb_purchaserequest->tb_product->prod_name }} </a>
							</td>

							<td>
								<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">
									{{ $grn->grn_deliveryOrderNum }}</a>
							</td>

							<!--begin::Date Delivery=-->
							<td class="text-end" data-order="2022-08-11">
								<span class="fw-bold">{{ $grn->grn_deliverydate }}</span>
							</td>
							<!--end::Date Delivery=-->

							<!--begin::Total=-->
							<td class="text-end pe-0">
								<span class="fw-bold">RM{{ $grn->tb_purchaseorder->po_total + $grn->tb_purchaseorder->tb_supplier->sup_shippingFee }}</span>
							</td>
							<!--end::Total=-->

							<!--begin::Recipient=-->
							<td class="text-end pe-0">
								<span class="fw-bold">{{ $grn->grn_recipient }}</span>
							</td>
							<!--end::Recipient=-->

							<td>
								<div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Invoice">
									<a href="{{url('grn-invoice',$grn->grn_id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
										<!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/good/releases/2022-08-13-004438/core/html/src/media/icons/duotune/communication/com002.svg-->
										<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21 18H3C2.4 18 2 17.6 2 17V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V17C22 17.6 21.6 18 21 18Z" fill="currentColor" />
												<path d="M11.4 13.5C11.8 13.8 12.3 13.8 12.6 13.5L21.6 6.30005C21.4 6.10005 21.2 6 20.9 6H2.99998C2.69998 6 2.49999 6.10005 2.29999 6.30005L11.4 13.5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
								</div>

								<div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
									<a href="{{ route('edit', ['grn_id' => $grn['grn_id']]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
								</div>

								<div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Delete">
									<a href="{{ route('delete', ['grn_id' => $grn['grn_id']])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick="return confirmDelete();">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
					<!--end::Table body-->


				</table>
				<!--end::Table-->
			</div>
			<!--end::Table container-->
		</div>
		<!--begin::Body-->
	</div>
	<!--end::Tables Widget 9-->

	<script>
		function confirmDelete() {
			if (confirm('Are you sure you want to delete?')) {
				// User confirmed, allow the default link action (deletion)
				return true;
			} else {
				// User canceled, prevent the default link action (deletion)
				return false;
			}
		}
	</script>
	@endsection