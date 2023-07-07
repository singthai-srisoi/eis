
@extends('mishandling.layout')

@section('content')
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
	
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            Misshandling Details - #{{ $mishandling->miss_id }}
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Order ID : #{{ $mishandling->shipping->order->o_id }}</h5>
                        <p class="card-text">Customer Name : {{ $mishandling->shipping->order->customer->c_name }}</p>
                        <p class="card-text">Shipping Date : {{ $mishandling->shipping->order->customer->c_address }}</p>
                        <p class="card-text">Shipping Courier : {{ $mishandling->shipping->order->customer->c_contact }}</p>
                        <p class="card-text">Shipping Status : @if($mishandling->shipping->shp_status == 1)
                            <span class="badge badge-warning">Pending</span>
                        @elseif($mishandling->shipping->shp_status == 2)
                            <span class="badge badge-secondary">Packed</span>
                        @elseif($mishandling->shipping->shp_status == 3)
                            <span class="badge badge-info">Shipping</span>
                        @else
                            <span class="badge badge-success">Delivered</span>
                        @endif</p>
                        <p class="card-text">Descriptionn : {{ $mishandling->shipping->shp_courier }}</p>
                        <p class="card-text">Descriptionn : {{ $mishandling->miss_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection