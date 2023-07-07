@extends('delivery.layout')

@section('content')
<!--begin::Wrapper-->


            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Container-->
                <div class="container-xxl" id="kt_content_container">
                    <!--begin::Form-->
                        <!--begin::Aside column-->
                        <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                            <!--begin::Order details-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order Details</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column gap-10">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Order ID</label>
                                            <!--end::Label-->
                                            <!--begin::Auto-generated ID-->
                                            <div class="fw-bold fs-3">#{{ $shipping->shp_id }}</div>
                                            &nbsp;
                                            <div class="fw fs-5"> Ship Status : 
                                                @if($shipping->shp_status == 1)
                                                <span class="badge badge-warning">Pending</span>
                                                @elseif($shipping->shp_status == 2)
                                                <span class="badge badge-secondary">Packed</span>
                                                @elseif($shipping->shp_status == 3)
                                                <span class="badge badge-info">Shipping</span>
                                                @else
                                                <span class="badge badge-success">Delivered</span>
                                                @endif
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Shipped Date</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <input name="billing_order_address_1" placeholder="Select a date" class="form-control mb-2" value={{$shipping->shp_date}} readonly/>                                <!--end::Select2-->
                                            
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Shipped Courier</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <input id="kt_ecommerce_edit" name="order_date" placeholder="Select a date" class="form-control mb-2" value={{$shipping->shp_courier}} readonly/>
                                            <!--end::Select2-->
                                        
                                        </div>
                                        <!--end::Input group-->
                                        
                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Order details-->
                        </div>
                        <br><br>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <form action="{{ route('mishandling.store') }}" method="POST">
                            @csrf
                        
                            <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                                <!--begin::Order details-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Submit Mishandling Report</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <input type="hidden" name="ship_id" value="{{ $shipping->shp_id }}">
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        
                                        <div class="d-flex flex-column gap-5 gap-md-7">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column flex-md-row gap-5">
                                                <div class="fv-row flex-row-fluid">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Mishandling Details</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <textarea class="form-control" name="miss_desc" placeholder="Mishandling Details" required></textarea>
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Specify What Happened Here.</div>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Billing address-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order details-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="{{ route('logistics.index') }}" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <!--end::Button-->
                                </div>
                            </div>
                            <!--end::Main column-->
                        </form>
                        
                    <!--end::Form-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Content-->



<script>
    $(document).ready(function() {
    $('#mishandling-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');
        var data = form.serializeArray();
        
        // Add Ship ID manually to the serialized data
        data.push({ name: 'ship_id', value: '{{ $shipping->shp_id }}' });

        $.ajax({
        url: url,
        method: method,
        data: data,
        success: function(response) {
            // Handle success response
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.log(xhr.responseText);
        }
        });
    });
    });

  </script>
  

@endsection