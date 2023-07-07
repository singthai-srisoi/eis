@extends('customer.layout')
@section('signup')
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Authentication - Sign-up -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Body-->
		<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
			<!--begin::Form-->
			<div class="d-flex flex-center flex-column flex-lg-row-fluid">
				<!--begin::Wrapper-->
				<div class="w-lg-500px p-10">
					<!--begin::Form-->
					<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="signup" href="{{url('signin')}}">
						@csrf
						<!--begin::Heading-->
						<div class="text-center mb-11">
							<!--begin::Title-->
							<h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
							<!--end::Title-->
						</div>
						<!--begin::Heading-->
						<!--begin::Login options-->
						<!--begin::Separator-->
						<div class="separator separator-content my-14">
							<span class="w-125px text-gray-500 fw-semibold fs-7">with email</span>
						</div>
						<!--end::Separator-->
						<!--begin::Input group=-->
						<div class="fv-row mb-8">
							<!--begin::Email-->
							<input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
							<!--end::Email-->
						</div>
						<!--begin::Input group-->
						<div class="fv-row mb-8" data-kt-password-meter="true">
							<!--begin::Wrapper-->
							<div class="mb-1">
								<!--begin::Input wrapper-->
								<div class="position-relative mb-3">
									<input class="form-control bg-transparent" type="password" placeholder="Password" name="u_pwd" autocomplete="off" />
									<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
										<i class="bi bi-eye-slash fs-2"></i>
										<i class="bi bi-eye fs-2 d-none"></i>
									</span>
								</div>
								<!--end::Input wrapper-->
								<!--begin::Meter-->
								<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
								</div>
								<!--end::Meter-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Hint-->
							<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
							<!--end::Hint-->
						</div>
						<!--end::Input group=-->
						<!--end::Input group=-->
						<div class="fv-row mb-8">
							<!--begin::Repeat Password-->
							<input placeholder="Repeat Password" name="u_pwd" type="password" autocomplete="off" class="form-control bg-transparent" />
							<!--end::Repeat Password-->
						</div>
						<!--end::Input group=-->
						<!--begin::Submit button-->
						<div class="d-grid mb-10">
							<button type="submit" name="signup" value="Save" class="btn btn-primary">
								<!--begin::Indicator label-->
								<span class="indicator-label">Sign up</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...</span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Submit button-->
						<!--begin::Sign up-->
						<div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
							<a href="{{ url('signin') }}" class="link-primary fw-semibold">Sign in</a>
						</div>
						<!--end::Sign up-->
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
	<!--end::Authentication - Sign-up-->
</div>
<!--end::Root-->
<!--end::Main-->
@endsection