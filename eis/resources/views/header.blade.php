<!--begin::Header-->
<div id="kt_header" class="header">
	<!--begin::Container-->
	<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">

	<!--begin::Wrapper-->
	<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
		<!--begin::Aside mobile toggle-->
		<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
			<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
			<span class="svg-icon svg-icon-1 mt-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
					<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Aside mobile toggle-->
		<!--begin::Logo-->
		<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
			<img alt="Logo" src="assets/media/logos/demo3.svg" class="theme-light-show h-20px" />
			<img alt="Logo" src="assets/media/logos/demo3-dark.svg" class="theme-dark-show h-20px" />
		</a>
		<!--end::Logo-->
	</div>
	<!--end::Wrapper-->
	<!--begin::Topbar-->
	<div class="d-flex align-items-center flex-shrink-0">

		<!--begin::User menu-->
		<div class="d-flex align-items-center ms-3 ms-lg-4">
			<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
				<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
				<span class="svg-icon svg-icon-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
					  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--begin::User account menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content d-flex align-items-center px-3">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
						</div>
						<!--end::Avatar-->
						<!--begin::Username-->
						<div class="d-flex flex-column">
							<div class="fw-bold d-flex align-items-center fs-5">Max Smith
							<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
							<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
						</div>
						<!--end::Username-->
					</div>
				</div>
				<!--end::Menu item-->

				<!--begin::Menu separator-->
				<div class="separator my-2"></div>
				<!--end::Menu separator-->

				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="{{url('profile')}}" class="menu-link px-5">My Profile</a>
				</div>
				<!--end::Menu item-->

				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="{{url('order-history-cust')}}" class="menu-link px-5">My Order</a>
				</div>
				<!--end::Menu item-->
				
				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="{{url('invoice-cust')}}" class="menu-link px-5">My Invoice</a>
				</div>
				<!--end::Menu item-->

				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="" class="menu-link px-5">Sign Out</a>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::User account menu-->
		</div>
		<!--end::User menu-->

		<!-- @include(') -->

			
		</div>
		<!--end::Topbar-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->