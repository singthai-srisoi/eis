@extends('template')
@section('p_content')


<div class="content d-flex flex-column flex-column-fluid" id="p_content">
<!--begin::Container-->
<div class="container-xxl" id="p_content_container">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
		<!--begin::Heading-->
		<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">{{$ctg->ctg_desc}}</h1>
		<!--begin::Breadcrumb-->
		<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
			<li class="breadcrumb-item text-muted">
				<a href="{{url('product-page')}}" class="text-muted">All Categories</a>
			</li>
			<li class="breadcrumb-item text-muted">{{$ctg->ctg_desc}}</li>
			<li class="breadcrumb-item text-dark">Products</li>
		</ul>
		<!--end::Breadcrumb-->
		<!--end::Heading-->
	</div>
	<!--end::Page title=-->
	<!--begin::Tables Widget 9-->
	<div class="card mb-5 mb-xl-10">
		<!--begin::Header-->
		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bold fs-3 mb-1">Products</span>
			</h3>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			<span>{{session('success')}}</span>
			</div>
			@endif
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body py-3">
		<!--begin::Row-->
		<div class="row g-10">
			<!--begin::Col-->
			@foreach ($product as $p)
			<div class="col-md-4">
				<!--begin::Hot sales post-->
				<div class="card-xl-stretch me-md-6">
					<!--begin::Overlay-->
					<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ url('product-details', $p->prod_id)}}" >
						<!--begin::Image-->
						<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/products/' . $p['prod_image']) }}')"></div>
						<!--end::Image-->
						<!--begin::Action-->
						<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
							<i class="bi bi-eye-fill fs-2x text-white"></i>
						</div>
						<!--end::Action-->
					</a>
					<!--end::Overlay-->
					<!--begin::Body-->
					<div class="mt-5">
						<!--begin::Title-->
						<a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base" style="white-space: nowrap; overflow: hidden; max-width: 100%; display: inline-block;">{{$p['prod_name']}}</a>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fw-normal fs-6 text-gray-600 text-dark mt-3" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3; text-overflow: ellipsis;">{{$p['prod_desc']}}</div>
						<!--end::Text-->
						<!--begin::Text-->
						<div class="fs-6 fw-bold mt-5 d-flex flex-stack">
							<!--begin::Label-->
							<span class="badge border border-dashed fs-2 fw-bold text-dark p-2">
							<span class="fs-6 fw-semibold text-gray-400">RM</span>{{$p['prod_sellprice']}}</span>
							<!--end::Label-->
							<!--begin::Action-->
							<a href="{{ route('add-to-cart', $p->prod_code) }}" class="btn btn-sm btn-success align-items-center"><i class="bi bi-cart-plus-fill"></i></a>
							<!--end::Action-->
						</div>
						<!--end::Text-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Hot sales post-->				
			</div>
			@endforeach
			<!--end::Col-->
		</div>
		<!--end::Row-->
		</div>		
	</div>
	<!--end::Tables Widget 9-->

</div>
<!--end::Container-->
</div>

@endsection