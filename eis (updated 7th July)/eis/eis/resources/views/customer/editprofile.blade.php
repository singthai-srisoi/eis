@extends('templatecust')
@section('editprofile')

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
					<a href="{{url('product-cust')}}" class="text-muted">Home</a>
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
									<a class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"> Hi, {{ session('user')['u_name'] ? session('user')['u_name'] : session('user')['u_email'] }}</a>
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
										<!--end::Svg Icon-->
										@if ($user->tb_address)
										{{ $user->tb_address->a_state }}, {{ $user->tb_address->a_country }}
										@else
										No address available
										@endif
									</a>
									<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
												<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->{{$user->u_email}}</a>
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
			</div>
			<!--begin::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-9">
				<form class="form w-100" novalidate="novalidate" method="POST" action="{{ url('editprofile', $user->u_id) }}" href="{{url('profile')}}">
					@csrf
					@method('PUT')
					<!--begin::Row-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Full Name</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<input type="text" class="form-control" name="u_name" value="{{$user['u_name']}}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Contact Phone
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<input type="text" class="form-control" name="u_contact" value="{{$user['u_contact']}}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Address1</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<input type="text" class="form-control" name="a_line1" value="{{ optional($user->tb_address)->a_line1 }}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Address2</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<input type="text" class="form-control" name="a_line2" value="{{ optional($user->tb_address)->a_line2 }}" />
							</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">City</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<input type="text" class="form-control" name="a_city" value="{{ optional($user->tb_address)->a_city }}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Postcode
							<i class="fas fa-exclamation-circle ms-1 fs-7"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<input type="text" class="form-control" name="a_postcode" value="{{ optional($user->tb_address)->a_postcode }}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">State
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="State of origination"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<input type="text" class="form-control" name="a_state" value="{{ optional($user->tb_address)->a_state }}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Country
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800">
								<input type="text" class="form-control" name="a_country" value="{{ optional($user->tb_address)->a_country}}" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<div class="row mb-4 d-flex justify-content-center">
						<button type="submit" name="editprofile" value="Save" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
			<!--end::Card body-->
		</div>
		<!--end::details View-->
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Page-->

@endsection