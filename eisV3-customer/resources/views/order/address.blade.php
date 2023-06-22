@extends('template')
@section('address')

  <style>
	
    .form-group {
        display: flex;
        align-items: center;
    }
    
    .form-group label {
        flex: 0 0 150px; /* Adjust the width as needed */
        margin-right: 10px; /* Adjust the spacing as needed */
    }
</style>


	
  <!--end::Head-->
  <!--begin::Body-->
   
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="">
							<!--begin::Form-->
								<!--begin::Aside column-->
								
								<!--end::Aside column-->
								<!--begin::Main column-->
								<div class="d-flex flex-column flex-lg-row-fluid">
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Delivery Details</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Billing address-->
											<div class="d-flex flex-column gap-5 gap-md-7">
												<!--begin::Title-->
												<!--end::Title-->
												<!--begin::Input group-->
												<div class="d-flex flex-column flex-md-row gap-5">
													<div class="fv-row flex-row-fluid">
														<!--begin::Label-->
														
												
                            <form method="POST" action="{{url('place-order')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="address_line_1">Address Line 1</label>
                            <input type="text" name="a_line1" class="form-control" required placeholder="Address Line 1">
                        </div>
                        <div class="form-group">
                            <label for="address_line_2">Address Line 2</label>
                            <input type="text" name="a_line2" class="form-control" placeholder="Address Line 2">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="a_city" class="form-control" required placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" name="a_postcode" class="form-control" required placeholder="Postcode">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="a_state" class="form-control" required placeholder="State">
                        </div>
                        <div class="form-group">
                            <label class="required form-label">Country</label>
                            <input type="text" name="a_country" class="form-control" required placeholder="Country">
                        </div>

                          <div class="form-group">
                              <label for="file">Upload Payment Receipt</label>
                              <input type="file" name="p_file" class="form-control-file">
                          </div>
                          
                      




												
                  <!--file-upload-->

									<div class="d-flex justify-content-end">
										<!--begin::Button-->
										<a href="{{ url('address') }}" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5" onclick="cancelAndClearForm()">Cancel</a>

<script>
function cancelAndClearForm() {
    // Redirect to the same page
    window.location.href = "{{ url('address') }}";

    // Clear the form by resetting its values
    document.getElementById("yourFormId").reset();
}
</script>

										<!--end::Button-->
										<!--begin::Button-->
										<button type="submit" class="btn btn-primary">Submit</button>
										<!--end::Button-->
									</div>
								</div>
								<!--end::Main column-->
							<!--end::Form-->
						</div>
						</form><!--end::Container-->
            
  </div>
  
</div>

					</div>
					<!--end::Content-->           
   </div>
   

  </body>
  <!--end::Body-->
@endsection