@extends('template')
@section('profile')					

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="profile">
<!--begin::Container-->
<div class="container-xxl" id="kt_content_container">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
		<!--begin::Heading-->
		<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Profile</h1>
		<!--end::Heading-->
		<!--begin::Breadcrumb-->
		<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
			<li class="breadcrumb-item text-muted">
				<a href="../../demo3/dist/index.html" class="text-muted">Home</a>
			</li>
			<li class="breadcrumb-item text-muted">Profile</li>
		</ul>
		<!--end::Breadcrumb-->
	</div>
	<!--end::Page title=-->
<!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
	<div class="card-body pt-9 pb-0">
		<!--begin::Details-->
		<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
			<!--begin::Info-->
			<div class="flex-grow-1">
				<!--begin::Title-->
				<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
					<!--begin::User-->
					<div class="d-flex flex-column">
						<!--begin::Name-->
						<div class="d-flex align-items-center mb-2">
							<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
							<a href="#">
								<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
								<span class="svg-icon svg-icon-1 svg-icon-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
										<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
										<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Name-->
						<!--begin::Info-->
						<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
							<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
							<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
									<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->SF, Bay Area</a>
							<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
									<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->max@kt.com</a>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
					<!--begin::Actions-->
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Title-->
				<!--begin::Stats-->
				<div class="d-flex flex-wrap flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-grow-1 pe-8">
						<!--begin::Stats-->
						<div class="d-flex flex-wrap">
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Stats-->
			</div>
			<!--end::Info-->
		</div>
		<!--end::Details-->
	</div>
</div>
<!--end::Navbar-->
<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
	<!--begin::Card header-->
	<div class="card-header cursor-pointer">
		<!--begin::Card title-->
		<div class="card-title m-0">
			<h3 class="fw-bold m-0">Profile Details</h3>
		</div>
		<!--end::Card title-->
		<!--begin::Action-->
		<a href="{{url('editprofile')}}" class="btn btn-primary align-self-center">Edit Profile</a>
		<!--end::Action-->
	</div>
	<!--begin::Card header-->
	<!--begin::Card body-->
	<div class="card-body p-9">
		<!--begin::Row-->
		<div class="row mb-7">
			<!--begin::Label-->
			<label class="col-lg-4 fw-semibold text-muted">Full Name</label>
			<!--end::Label-->
			<!--begin::Col-->
			<div class="col-lg-8">
				<span class="fw-bold fs-6 text-gray-800">Max Smith</span>
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Input group-->
		<div class="row mb-7">
			<!--begin::Label-->
			<label class="col-lg-4 fw-semibold text-muted">IC Number</label>
			<!--end::Label-->
			<!--begin::Col-->
			<div class="col-lg-8 fv-row">
				<span class="fw-semibold text-gray-800 fs-6">099900-14-0090</span>
			</div>
			<!--end::Col-->
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="row mb-7">
			<!--begin::Label-->
			<label class="col-lg-4 fw-semibold text-muted">Contact Phone
			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
			<!--end::Label-->
			<!--begin::Col-->
			<div class="col-lg-8 d-flex align-items-center">
				<span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
				<span class="badge badge-success">Verified</span>
			</div>
			<!--end::Col-->
		</div>
		<!--end::Input group-->									
		<!--begin::Input group-->
		<div class="row mb-7">
			<!--begin::Label-->
			<label class="col-lg-4 fw-semibold text-muted">Address
			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
			<!--end::Label-->
			<!--begin::Col-->
			<div class="col-lg-8">
				<span class="fw-bold fs-6 text-gray-800">Germany</span>
			</div>
			<!--end::Col-->
		</div>
		<!--end::Input group-->						
	</div>
	<!--end::Card body-->
</div>
<!--end::details View-->
<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
<!--begin::Container-->
<div class="container d-flex flex-column flex-md-row flex-stack">
<!--begin::Copyright-->
<div class="text-dark order-2 order-md-1">
	<span class="text-gray-400 fw-semibold me-1">Created by</span>
	<a target="_blank" class="text-muted text-hover-primary fw-semibold me-2 fs-6">FishBytes</a>
</div>
<!--end::Copyright-->
<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
	<li class="menu-item">
		<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
	</li>
	<li class="menu-item">
		<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
	</li>
	<li class="menu-item">
		<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
	</li>
</ul>
<!--end::Menu-->
</div>
<!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
<span class="svg-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-xl">
<!--begin::Modal content-->
<div class="modal-content rounded">
<!--begin::Modal header-->
<div class="modal-header justify-content-end border-0 pb-0">
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
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Offer A Deal-->
<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-1000px">
<!--begin::Modal content-->
<div class="modal-content">
<!--begin::Modal header-->
<div class="modal-header py-7 d-flex justify-content-between">
<!--begin::Modal title-->
<h2>Offer a Deal</h2>
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
<!--begin::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y m-5">
<!--begin::Stepper-->
<div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
<!--begin::Nav-->
<div class="stepper-nav justify-content-center py-2">
	<!--begin::Step 1-->
	<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
		<h3 class="stepper-title">Deal Type</h3>
	</div>
	<!--end::Step 1-->
	<!--begin::Step 2-->
	<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
		<h3 class="stepper-title">Deal Details</h3>
	</div>
	<!--end::Step 2-->
	<!--begin::Step 3-->
	<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
		<h3 class="stepper-title">Finance Settings</h3>
	</div>
	<!--end::Step 3-->
	<!--begin::Step 4-->
	<div class="stepper-item" data-kt-stepper-element="nav">
		<h3 class="stepper-title">Completed</h3>
	</div>
	<!--end::Step 4-->
</div>
<!--end::Nav-->
<!--begin::Form-->
<form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
	<!--begin::Type-->
	<div class="current" data-kt-stepper-element="content">
		<!--begin::Wrapper-->
		<div class="w-100">
			<!--begin::Heading-->
			<div class="mb-13">
				<!--begin::Title-->
				<h2 class="mb-3">Deal Type</h2>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="text-muted fw-semibold fs-5">If you need more info, please check out
				<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<!--begin::Input group-->
			<div class="fv-row mb-15" data-kt-buttons="true">
				<!--begin::Option-->
				<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
					<!--begin::Input-->
					<input class="btn-check" type="radio" checked="checked" name="offer_type" value="1" />
					<!--end::Input-->
					<!--begin::Label-->
					<span class="d-flex">
						<!--begin::Icon-->
						<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
						<span class="svg-icon svg-icon-3hx">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
								<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
								<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--end::Icon-->
						<!--begin::Info-->
						<span class="ms-4">
							<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Deal</span>
							<span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
						</span>
						<!--end::Info-->
					</span>
					<!--end::Label-->
				</label>
				<!--end::Option-->
				<!--begin::Option-->
				<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
					<!--begin::Input-->
					<input class="btn-check" type="radio" name="offer_type" value="2" />
					<!--end::Input-->
					<!--begin::Label-->
					<span class="d-flex">
						<!--begin::Icon-->
						<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
						<span class="svg-icon svg-icon-3hx">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
								<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
								<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
								<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--end::Icon-->
						<!--begin::Info-->
						<span class="ms-4">
							<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate Deal</span>
							<span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
						</span>
						<!--end::Info-->
					</span>
					<!--end::Label-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
					<span class="indicator-label">Offer Details</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Type-->
	<!--begin::Details-->
	<div data-kt-stepper-element="content">
		<!--begin::Wrapper-->
		<div class="w-100">
			<!--begin::Heading-->
			<div class="mb-13">
				<!--begin::Title-->
				<h2 class="mb-3">Deal Details</h2>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="text-muted fw-semibold fs-5">If you need more info, please check out
				<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<!--begin::Input group-->
			<div class="fv-row mb-8">
				<!--begin::Label-->
				<label class="required fs-6 fw-semibold mb-2">Customer</label>
				<!--end::Label-->
				<!--begin::Input-->
				<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">
					<option></option>
					<option value="1" selected="selected">Keenthemes</option>
					<option value="2">CRM App</option>
				</select>
				<!--end::Input-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-8">
				<!--begin::Label-->
				<label class="required fs-6 fw-semibold mb-2">Deal Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				<input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign" />
				<!--end::Input-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-8">
				<!--begin::Label-->
				<label class="fs-6 fw-semibold mb-2">Deal Description</label>
				<!--end::Label-->
				<!--begin::Label-->
				<textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
				<!--end::Label-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-8">
				<label class="required fs-6 fw-semibold mb-2">Activation Date</label>
				<div class="position-relative d-flex align-items-center">
					<!--begin::Icon-->
					<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
					<span class="svg-icon svg-icon-2 position-absolute mx-4">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
							<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
							<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
					<!--end::Icon-->
					<!--begin::Datepicker-->
					<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="details_activation_date" />
					<!--end::Datepicker-->
				</div>
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-15">
				<!--begin::Wrapper-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5">
						<label class="required fs-6 fw-semibold">Notifications</label>
						<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
					</div>
					<!--end::Label-->
					<!--begin::Checkboxes-->
					<div class="d-flex">
						<!--begin::Checkbox-->
						<label class="form-check form-check-custom form-check-solid me-10">
							<!--begin::Input-->
							<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]" />
							<!--end::Input-->
							<!--begin::Label-->
							<span class="form-check-label fw-semibold">Email</span>
							<!--end::Label-->
						</label>
						<!--end::Checkbox-->
						<!--begin::Checkbox-->
						<label class="form-check form-check-custom form-check-solid">
							<!--begin::Input-->
							<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="details_notifications[]" />
							<!--end::Input-->
							<!--begin::Label-->
							<span class="form-check-label fw-semibold">Phone</span>
							<!--end::Label-->
						</label>
						<!--end::Checkbox-->
					</div>
					<!--end::Checkboxes-->
				</div>
				<!--begin::Wrapper-->
			</div>
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="d-flex flex-stack">
				<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">Deal Type</button>
				<button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
					<span class="indicator-label">Financing</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Details-->
	<!--begin::Budget-->
	<div data-kt-stepper-element="content">
		<!--begin::Wrapper-->
		<div class="w-100">
			<!--begin::Heading-->
			<div class="mb-13">
				<!--begin::Title-->
				<h2 class="mb-3">Finance</h2>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="text-muted fw-semibold fs-5">If you need more info, please check out
				<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<!--begin::Input group-->
			<div class="fv-row mb-8">
				<!--begin::Label-->
				<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
					<span class="required">Setup Budget</span>
					<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
				</label>
				<!--end::Label-->
				<!--begin::Dialer-->
				<div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
					<!--begin::Decrease control-->
					<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
						<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
								<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Decrease control-->
					<!--begin::Input control-->
					<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />
					<!--end::Input control-->
					<!--begin::Increase control-->
					<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
						<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
								<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
								<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Increase control-->
				</div>
				<!--end::Dialer-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-8">
				<!--begin::Label-->
				<label class="fs-6 fw-semibold mb-2">Budget Usage</label>
				<!--end::Label-->
				<!--begin::Row-->
				<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
					<!--begin::Col-->
					<div class="col-md-6 col-lg-12 col-xxl-6">
						<!--begin::Option-->
						<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
							<!--begin::Radio-->
							<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
								<input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked" />
							</span>
							<!--end::Radio-->
							<!--begin::Info-->
							<span class="ms-5">
								<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
								<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
							</span>
							<!--end::Info-->
						</label>
						<!--end::Option-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-md-6 col-lg-12 col-xxl-6">
						<!--begin::Option-->
						<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
							<!--begin::Radio-->
							<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
								<input class="form-check-input" type="radio" name="finance_usage" value="2" />
							</span>
							<!--end::Radio-->
							<!--begin::Info-->
							<span class="ms-5">
								<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
								<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
							</span>
							<!--end::Info-->
						</label>
						<!--end::Option-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-15">
				<!--begin::Wrapper-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5">
						<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
						<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="d-flex flex-stack">
				<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>
				<button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
					<span class="indicator-label">Build Team</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Budget-->
	<!--begin::Complete-->
	<div data-kt-stepper-element="content">
		<!--begin::Wrapper-->
		<div class="w-100">
			<!--begin::Heading-->
			<div class="mb-13">
				<!--begin::Title-->
				<h2 class="mb-3">Deal Created!</h2>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="text-muted fw-semibold fs-5">If you need more info, please check out
				<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<!--begin::Actions-->
			<div class="d-flex flex-center pb-20">
				<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>
				<a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>
			</div>
			<!--end::Actions-->
			<!--begin::Illustration-->
			<div class="text-center px-4">
				<img src="assets/media/illustrations/dozzy-1/20.png" alt="" class="mw-100 mh-300px" />
			</div>
			<!--end::Illustration-->
		</div>
	</div>
	<!--end::Complete-->
</form>
<!--end::Form-->
</div>
<!--end::Stepper-->
</div>
<!--begin::Modal body-->
</div>
</div>
</div>
<!--end::Modal - Offer A Deal-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-900px">
<!--begin::Modal content-->
<div class="modal-content">
<!--begin::Modal header-->
<div class="modal-header">
<!--begin::Modal title-->
<h2>Create App</h2>
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
<div class="modal-body py-lg-10 px-lg-10">
<!--begin::Stepper-->
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
<!--begin::Aside-->
<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
	<!--begin::Nav-->
	<div class="stepper-nav ps-lg-10">
		<!--begin::Step 1-->
		<div class="stepper-item current" data-kt-stepper-element="nav">
			<!--begin::Wrapper-->
			<div class="stepper-wrapper">
				<!--begin::Icon-->
				<div class="stepper-icon w-40px h-40px">
					<i class="stepper-check fas fa-check"></i>
					<span class="stepper-number">1</span>
				</div>
				<!--end::Icon-->
				<!--begin::Label-->
				<div class="stepper-label">
					<h3 class="stepper-title">Details</h3>
					<div class="stepper-desc">Name your App</div>
				</div>
				<!--end::Label-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Line-->
			<div class="stepper-line h-40px"></div>
			<!--end::Line-->
		</div>
		<!--end::Step 1-->
		<!--begin::Step 2-->
		<div class="stepper-item" data-kt-stepper-element="nav">
			<!--begin::Wrapper-->
			<div class="stepper-wrapper">
				<!--begin::Icon-->
				<div class="stepper-icon w-40px h-40px">
					<i class="stepper-check fas fa-check"></i>
					<span class="stepper-number">2</span>
				</div>
				<!--begin::Icon-->
				<!--begin::Label-->
				<div class="stepper-label">
					<h3 class="stepper-title">Frameworks</h3>
					<div class="stepper-desc">Define your app framework</div>
				</div>
				<!--begin::Label-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Line-->
			<div class="stepper-line h-40px"></div>
			<!--end::Line-->
		</div>
		<!--end::Step 2-->
		<!--begin::Step 3-->
		<div class="stepper-item" data-kt-stepper-element="nav">
			<!--begin::Wrapper-->
			<div class="stepper-wrapper">
				<!--begin::Icon-->
				<div class="stepper-icon w-40px h-40px">
					<i class="stepper-check fas fa-check"></i>
					<span class="stepper-number">3</span>
				</div>
				<!--end::Icon-->
				<!--begin::Label-->
				<div class="stepper-label">
					<h3 class="stepper-title">Database</h3>
					<div class="stepper-desc">Select the app database type</div>
				</div>
				<!--end::Label-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Line-->
			<div class="stepper-line h-40px"></div>
			<!--end::Line-->
		</div>
		<!--end::Step 3-->
		<!--begin::Step 4-->
		<div class="stepper-item" data-kt-stepper-element="nav">
			<!--begin::Wrapper-->
			<div class="stepper-wrapper">
				<!--begin::Icon-->
				<div class="stepper-icon w-40px h-40px">
					<i class="stepper-check fas fa-check"></i>
					<span class="stepper-number">4</span>
				</div>
				<!--end::Icon-->
				<!--begin::Label-->
				<div class="stepper-label">
					<h3 class="stepper-title">Billing</h3>
					<div class="stepper-desc">Provide payment details</div>
				</div>
				<!--end::Label-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Line-->
			<div class="stepper-line h-40px"></div>
			<!--end::Line-->
		</div>
		<!--end::Step 4-->
		<!--begin::Step 5-->
		<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
			<!--begin::Wrapper-->
			<div class="stepper-wrapper">
				<!--begin::Icon-->
				<div class="stepper-icon w-40px h-40px">
					<i class="stepper-check fas fa-check"></i>
					<span class="stepper-number">5</span>
				</div>
				<!--end::Icon-->
				<!--begin::Label-->
				<div class="stepper-label">
					<h3 class="stepper-title">Completed</h3>
					<div class="stepper-desc">Review and Submit</div>
				</div>
				<!--end::Label-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Step 5-->
	</div>
	<!--end::Nav-->
</div>
<!--begin::Aside-->
<!--begin::Content-->
<div class="flex-row-fluid py-lg-5 px-lg-15">
	<!--begin::Form-->
	<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
		<!--begin::Step 1-->
		<div class="current" data-kt-stepper-element="content">
			<div class="w-100">
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Label-->
					<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
						<span class="required">App Name</span>
						<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
					</label>
					<!--end::Label-->
					<!--begin::Input-->
					<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
					<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="fv-row">
					<!--begin::Label-->
					<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
						<span class="required">Category</span>
						<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
					</label>
					<!--end::Label-->
					<!--begin:Options-->
					<div class="fv-row">
						<!--begin:Option-->
						<label class="d-flex flex-stack mb-5 cursor-pointer">
							<!--begin:Label-->
							<span class="d-flex align-items-center me-2">
								<!--begin:Icon-->
								<span class="symbol symbol-50px me-6">
									<span class="symbol-label bg-light-primary">
										<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-primary">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
												<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</span>
								<!--end:Icon-->
								<!--begin:Info-->
								<span class="d-flex flex-column">
									<span class="fw-bold fs-6">Quick Online Courses</span>
									<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
								</span>
								<!--end:Info-->
							</span>
							<!--end:Label-->
							<!--begin:Input-->
							<span class="form-check form-check-custom form-check-solid">
								<input class="form-check-input" type="radio" name="category" value="1" />
							</span>
							<!--end:Input-->
						</label>
						<!--end::Option-->
						<!--begin:Option-->
						<label class="d-flex flex-stack mb-5 cursor-pointer">
							<!--begin:Label-->
							<span class="d-flex align-items-center me-2">
								<!--begin:Icon-->
								<span class="symbol symbol-50px me-6">
									<span class="symbol-label bg-light-danger">
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</span>
								<!--end:Icon-->
								<!--begin:Info-->
								<span class="d-flex flex-column">
									<span class="fw-bold fs-6">Face to Face Discussions</span>
									<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
								</span>
								<!--end:Info-->
							</span>
							<!--end:Label-->
							<!--begin:Input-->
							<span class="form-check form-check-custom form-check-solid">
								<input class="form-check-input" type="radio" name="category" value="2" />
							</span>
							<!--end:Input-->
						</label>
						<!--end::Option-->
						<!--begin:Option-->
						<label class="d-flex flex-stack cursor-pointer">
							<!--begin:Label-->
							<span class="d-flex align-items-center me-2">
								<!--begin:Icon-->
								<span class="symbol symbol-50px me-6">
									<span class="symbol-label bg-light-success">
										<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
												<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</span>
								<!--end:Icon-->
								<!--begin:Info-->
								<span class="d-flex flex-column">
									<span class="fw-bold fs-6">Full Intro Training</span>
									<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
								</span>
								<!--end:Info-->
							</span>
							<!--end:Label-->
							<!--begin:Input-->
							<span class="form-check form-check-custom form-check-solid">
								<input class="form-check-input" type="radio" name="category" value="3" />
							</span>
							<!--end:Input-->
						</label>
						<!--end::Option-->
					</div>
					<!--end:Options-->
				</div>
				<!--end::Input group-->
			</div>
		</div>
		<!--end::Step 1-->
		<!--begin::Step 2-->
		<div data-kt-stepper-element="content">
			<div class="w-100">
				<!--begin::Input group-->
				<div class="fv-row">
					<!--begin::Label-->
					<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
						<span class="required">Select Framework</span>
						<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
					</label>
					<!--end::Label-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer mb-5">
						<!--begin:Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin:Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-warning">
									<i class="fab fa-html5 text-warning fs-2x"></i>
								</span>
							</span>
							<!--end:Icon-->
							<!--begin:Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">HTML5</span>
								<span class="fs-7 text-muted">Base Web Projec</span>
							</span>
							<!--end:Info-->
						</span>
						<!--end:Label-->
						<!--begin:Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
						</span>
						<!--end:Input-->
					</label>
					<!--end::Option-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer mb-5">
						<!--begin:Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin:Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-success">
									<i class="fab fa-react text-success fs-2x"></i>
								</span>
							</span>
							<!--end:Icon-->
							<!--begin:Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">ReactJS</span>
								<span class="fs-7 text-muted">Robust and flexible app framework</span>
							</span>
							<!--end:Info-->
						</span>
						<!--end:Label-->
						<!--begin:Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" name="framework" value="2" />
						</span>
						<!--end:Input-->
					</label>
					<!--end::Option-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer mb-5">
						<!--begin:Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin:Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-danger">
									<i class="fab fa-angular text-danger fs-2x"></i>
								</span>
							</span>
							<!--end:Icon-->
							<!--begin:Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">Angular</span>
								<span class="fs-7 text-muted">Powerful data mangement</span>
							</span>
							<!--end:Info-->
						</span>
						<!--end:Label-->
						<!--begin:Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" name="framework" value="3" />
						</span>
						<!--end:Input-->
					</label>
					<!--end::Option-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer">
						<!--begin:Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin:Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-primary">
									<i class="fab fa-vuejs text-primary fs-2x"></i>
								</span>
							</span>
							<!--end:Icon-->
							<!--begin:Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">Vue</span>
								<span class="fs-7 text-muted">Lightweight and responsive framework</span>
							</span>
							<!--end:Info-->
						</span>
						<!--end:Label-->
						<!--begin:Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" name="framework" value="4" />
						</span>
						<!--end:Input-->
					</label>
					<!--end::Option-->
				</div>
				<!--end::Input group-->
			</div>
		</div>
		<!--end::Step 2-->
		<!--begin::Step 3-->
		<div data-kt-stepper-element="content">
			<div class="w-100">
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Label-->
					<label class="required fs-5 fw-semibold mb-2">Database Name</label>
					<!--end::Label-->
					<!--begin::Input-->
					<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
					<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="fv-row">
					<!--begin::Label-->
					<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
						<span class="required">Select Database Engine</span>
						<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
					</label>
					<!--end::Label-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer mb-5">
						<!--begin::Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin::Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-success">
									<i class="fas fa-database text-success fs-2x"></i>
								</span>
							</span>
							<!--end::Icon-->
							<!--begin::Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">MySQL</span>
								<span class="fs-7 text-muted">Basic MySQL database</span>
							</span>
							<!--end::Info-->
						</span>
						<!--end::Label-->
						<!--begin::Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
						</span>
						<!--end::Input-->
					</label>
					<!--end::Option-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer mb-5">
						<!--begin::Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin::Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-danger">
									<i class="fab fa-google text-danger fs-2x"></i>
								</span>
							</span>
							<!--end::Icon-->
							<!--begin::Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">Firebase</span>
								<span class="fs-7 text-muted">Google based app data management</span>
							</span>
							<!--end::Info-->
						</span>
						<!--end::Label-->
						<!--begin::Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" name="dbengine" value="2" />
						</span>
						<!--end::Input-->
					</label>
					<!--end::Option-->
					<!--begin:Option-->
					<label class="d-flex flex-stack cursor-pointer">
						<!--begin::Label-->
						<span class="d-flex align-items-center me-2">
							<!--begin::Icon-->
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-warning">
									<i class="fab fa-amazon text-warning fs-2x"></i>
								</span>
							</span>
							<!--end::Icon-->
							<!--begin::Info-->
							<span class="d-flex flex-column">
								<span class="fw-bold fs-6">DynamoDB</span>
								<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
							</span>
							<!--end::Info-->
						</span>
						<!--end::Label-->
						<!--begin::Input-->
						<span class="form-check form-check-custom form-check-solid">
							<input class="form-check-input" type="radio" name="dbengine" value="3" />
						</span>
						<!--end::Input-->
					</label>
					<!--end::Option-->
				</div>
				<!--end::Input group-->
			</div>
		</div>
		<!--end::Step 3-->
		<!--begin::Step 4-->
		<div data-kt-stepper-element="content">
			<div class="w-100">
				<!--begin::Input group-->
				<div class="d-flex flex-column mb-7 fv-row">
					<!--begin::Label-->
					<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
						<span class="required">Name On Card</span>
						<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
					</label>
					<!--end::Label-->
					<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="d-flex flex-column mb-7 fv-row">
					<!--begin::Label-->
					<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
					<!--end::Label-->
					<!--begin::Input wrapper-->
					<div class="position-relative">
						<!--begin::Input-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
						<!--end::Input-->
						<!--begin::Card logos-->
						<div class="position-absolute translate-middle-y top-50 end-0 me-5">
							<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
							<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
							<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
						</div>
						<!--end::Card logos-->
					</div>
					<!--end::Input wrapper-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-10">
					<!--begin::Col-->
					<div class="col-md-8 fv-row">
						<!--begin::Label-->
						<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
						<!--end::Label-->
						<!--begin::Row-->
						<div class="row fv-row">
							<!--begin::Col-->
							<div class="col-6">
								<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-6">
								<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
									<option></option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
									<option value="2031">2031</option>
									<option value="2032">2032</option>
								</select>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-md-4 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
							<span class="required">CVV</span>
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
						</label>
						<!--end::Label-->
						<!--begin::Input wrapper-->
						<div class="position-relative">
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
							<!--end::Input-->
							<!--begin::CVV icon-->
							<div class="position-absolute translate-middle-y top-50 end-0 me-3">
								<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
								<span class="svg-icon svg-icon-2hx">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22 7H2V11H22V7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::CVV icon-->
						</div>
						<!--end::Input wrapper-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5">
						<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
						<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Save Card</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Input group-->
			</div>
		</div>
		<!--end::Step 4-->
		<!--begin::Step 5-->
		<div data-kt-stepper-element="content">
			<div class="w-100 text-center">
				<!--begin::Heading-->
				<h1 class="fw-bold text-dark mb-3">Release!</h1>
				<!--end::Heading-->
				<!--begin::Description-->
				<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
				<!--end::Description-->
				<!--begin::Illustration-->
				<div class="text-center px-4 py-15">
					<img src="assets/media/illustrations/dozzy-1/9.png" alt="" class="mw-100 mh-300px" />
				</div>
				<!--end::Illustration-->
			</div>
		</div>
		<!--end::Step 5-->
		<!--begin::Actions-->
		<div class="d-flex flex-stack pt-10">
			<!--begin::Wrapper-->
			<div class="me-2">
				<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
				<span class="svg-icon svg-icon-3 me-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
						<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->Back</button>
			</div>
			<!--end::Wrapper-->
			<!--begin::Wrapper-->
			<div>
				<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
					<span class="indicator-label">Submit
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 ms-2 me-0">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
				<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
				<span class="svg-icon svg-icon-3 ms-1 me-0">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon--></button>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Actions-->
	</form>
	<!--end::Form-->
</div>
<!--end::Content-->

@endsection