@extends('template')
@section('content')

<!--begin::Container-->
<div class="container-xxl" id="kt_content_container">
	<!--begin::Layout-->
	<div class="d-flex flex-column flex-lg-row">
		<!--begin::Content-->
		<div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card body-->
				<div class="card-body p-12">
					<!--begin::Form-->
					<form class="form" method="POST" action="{{ route('grn.edit', ['id' => $grn->grn_id]) }}" id="kt_modal_edit_grn_form">
						@csrf
						@method('PUT')
						<h2>Edit Good Received Notes</h2><br><br>
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-5 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
								<span class="required">Purchase Order Number</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
							</label>
							<!--end::Label-->
							<!--begin::Select-->
							<select name="grn_poid" data-control="select2" class="form-select form-select-solid" readonly>
								<option value="{{ $grn->grn_poid }}">{{ $grn->grn_poid }}</option>
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
							<input class="form-control form-control-solid" type="date" style="width: 150px" name="grn_deliverydate" value="{{ $grn->grn_deliverydate }}" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-5 fv-row">
							<!--begin::Label-->
							<label class="required fs-5 fw-semibold mb-2">Delivery Order Number</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-solid" placeholder="" name="grn_deliveryOrderNum" value="{{ $grn->grn_deliveryOrderNum }}" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-5 fv-row">
							<!--begin::Label-->
							<label class="fs-5 fw-semibold mb-2">In House</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-solid" placeholder="" name="grn_inhouse" value="{{ $grn->grn_inhouse }}" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-5 fv-row">
							<!--begin::Label-->
							<label class="required fs-5 fw-semibold mb-2">Recipient</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-solid" placeholder="" name="grn_recipient" value="{{ $grn->grn_recipient }}" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Button-->
						<div class="text-center">
							<button type="reset" class="btn btn-light me-3">Discard</button>
							<button type="submit" id="kt_modal_edit_address_submit" class="btn btn-primary">
								<span class="indicator-label">Save Changes</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
								</span>
							</button>
						</div>
						<!--end::Button-->
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

	@endsection