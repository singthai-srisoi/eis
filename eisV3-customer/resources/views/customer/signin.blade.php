@extends('customer.layout')
@section('signin')

<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Authentication - Sign-in -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Body-->
		<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
			<!--begin::Form-->
			<div class="d-flex flex-center flex-column flex-lg-row-fluid">
				<!--begin::Wrapper-->
				<div class="w-lg-500px p-10">
					<!--begin::Form-->
					<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="signin" href="{{url('profile')}}">
						@csrf
						<!--begin::Heading-->
						<div class="text-center mb-11">
							<!--begin::Title-->
							<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
							<!--end::Title-->
						</div>
						<!--begin::Heading-->
						<!--begin::Login options-->
						<div class="row g-3 mb-9">
						</div>
						<!--end::Login options-->
						<!--begin::Separator-->
						<div class="separator separator-content my-14">
							<span class="w-125px text-gray-500 fw-semibold fs-7">with email</span>
						</div>
						<!--end::Separator-->
						<!--begin::Input group=-->
						<div class="fv-row mb-8">
							<!--begin::Email-->
							<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
							<!--end::Email-->
						</div>
						<!--end::Input group=-->
						<div class="fv-row mb-3">
							<!--begin::Password-->
							<input type="password" placeholder="Password" name="u_pwd" autocomplete="off" class="form-control bg-transparent" />
							<!--end::Password-->
						</div>
						<!--end::Input group=-->
						<!--begin::Wrapper-->
						<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
							<div></div>
							<!--begin::Link-->
							<a href="{{url('resetpassword')}}" class="link-primary">Forgot Password ?</a>
							<!--end::Link-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Submit button-->
						<div class="d-grid mb-10">
							<button type="submit" id="kt_sign_in_submit" name="signin" class="btn btn-primary">
								<!--begin::Indicator label-->
								<span class="indicator-label">Sign In</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...</span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Submit button-->
						<!--begin::Sign up-->
						<div class="text-gray-500 text-center fw-semibold fs-6">Doesn't have an account?
							<a href="{{url('signup')}}" class="link-primary">Sign up</a>
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
	<!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--end::Main-->
@endsection