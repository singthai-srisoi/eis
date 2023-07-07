
@extends('templatecust')
@section('success')

<div class="content d-flex flex-column flex-column-fluid" id="p_content">
      <!--begin::Container-->
<div class="container-xxl" id="p_content_container">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
		<!--begin::Heading-->
		<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Order Success</h1>
		<!--begin::Breadcrumb-->
		<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
			<li class="breadcrumb-item text-muted">
				<a href="{{url('product-cust')}}" class="text-muted">Order Status</a>
			</li>
			<li class="breadcrumb-item text-dark">Order Success</li>
		</ul>
		<!--end::Breadcrumb-->
		<!--end::Heading-->
	</div>
	<!--end::Page title=-->
  <div class="col-6 offset-2">
      <div class="card p-5 align-items-center" >
            <div style="border-radius: 200px; height: 200px; width: 200px; background: #F8FAF5; margin: 0 auto; display: flex; justify-content: center; align-items: center;">
              <i class="bi bi-check-lg" style="font-size: 80px; color:green;"></i>
            </div>

          <h1 class="mt-5 mb-5">Success</h1> 
          <p>We received your purchase request</p>
          <p> We'll be in touch shortly!</p>
          <div class="d-flex justify-content-end">
              <!--begin::Button-->
                <a href="{{url('receipt-cust', session('order'))}}" id="" class="btn btn-primary">View Receipt</a>&nbsp &nbsp &nbsp &nbsp &nbsp
              <!--end::Button-->
                <!--begin::Button-->
                <a  href= "{{url('invoice-cust', session('order'))}}"  id="" class="btn btn-primary">View Invoice</a>
            <!--end::Button-->
          </div>
      </div>
</div>
</div>
</div>
@endsection