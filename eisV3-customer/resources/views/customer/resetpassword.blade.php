@extends('customer.layout')
@section('resetpassword')
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Authentication - Password reset -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Body-->
		<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
			<!--begin::Form-->
			<div class="d-flex flex-center flex-column flex-lg-row-fluid">
				<!--begin::Wrapper-->
				<div class="w-lg-500px p-10">
					<!--begin::Form-->
					<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="{{url('newpassword')}}" action="#">
						<!--begin::Heading-->
						<div class="text-center mb-10">
							<!--begin::Title-->
							<h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
							<!--end::Title-->
							<!--begin::Link-->
							<div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
							<!--end::Link-->
						</div>
						<!--begin::Heading-->
						<!--begin::Input group=-->
						<div class="fv-row mb-8">
							<!--begin::Email-->
							<input type="text" placeholder="Email" name="u_email" autocomplete="off" class="form-control bg-transparent" />
							<!--end::Email-->
						</div>
						<!--begin::Actions-->
						<div class="d-flex flex-wrap justify-content-center pb-lg-0">
							<button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
								<!--begin::Indicator label-->
								<span class="indicator-label">Submit</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<a href="{{url('signin')}}" class="btn btn-light">Cancel</a>
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Form-->
		</div>
		<!--end::Body-->
		<!--begin::Aside-->
		<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg.png)">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
				<!--begin::Logo-->
				<a href="{{url('product-cust')}}" class="mb-0 mb-lg-12">
					<img alt="Logo" src="assets/media/logos/TSK-Logo.png" class="h-90px h-lg-75px" />
				</a>
				<!--end::Logo-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Aside-->
	</div>
	<!--end::Authentication - Password reset-->
</div>
<!--end::Root-->
@endsection