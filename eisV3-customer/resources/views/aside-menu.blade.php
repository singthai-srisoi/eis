
<!--begin::Aside menu-->
<div class="aside-menu ps-5 pe-3 mb-9" id="kt_aside_menu">
	<!--begin::Aside Menu-->
	<div class="w-100 hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold my-auto" id="#kt_aside_menu" data-kt-menu="true">
			<!--begin:Menu item-->
			<div class="menu-item here show menu-accordion">
				<!--begin:Menu link-->
				<a class="menu-link" href="{{ url('product-cust') }}">
					<span class="menu-icon">
					</span>
					<span class="menu-title">All Categories</span>
				</a>
				<!--end:Menu link-->
				
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
				@foreach ($cat as $c)
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link active" href="{{ url('product-category', $c->ctg_desc) }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">{{$c['ctg_desc']}}</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					@endforeach
				</div>
				<!--end:Menu sub-->
				
			</div>
			<!--end:Menu item-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
