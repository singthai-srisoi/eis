@extends('template')
@section('purchaseReq-form')

<!--begin::Container-->
	<div class="container-xxl" id="kt_content_container">
	<!--begin::Layout-->
	<div class="d-flex flex-column flex-lg-row">
		<!--begin::Content-->
			<div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
			<!--begin::Card-->
			<div class="card">
			<!--begin::Card body-->
				<div class="card-body p-12">
					<!--begin::Form-->
					<form action="{{ url('purchase-request') }}" method="POST">
						@csrf

						<label for="pr_prodID" class="required control label">Item:</label>
						<select name="pr_prodID" id="pr_prodID" class="form-control form-control-solid mb-3">
							<option value="">Select Item</option>
							@foreach($products as $product)
								<option value="{{ $product->prod_id }}">{{ $product->prod_name }}</option>
							@endforeach
						</select>
						
						<label for="pr_ddate" class="required control-label">Delivery Date:</label>
						<input type="date" name="pr_ddate" id="pr_ddate" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Due Date" />

						<label for="pr_qty" class="required control-label">Quantity:</label>
						<input type="number" name="pr_qty" id="pr_qty" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Quantity" />

						<label for="pr_uom" class="required control-label">Unit of Measurement:</label>
						<select name="pr_uom" id="pr_uom" class="form-control form-control-solid mb-3" style="width: 200px;">
							<option value="">Select UOM</option>
							@foreach($uoms as $uom)
								<option value="{{ $uom->uom_id }}">{{ $uom->uom_desc }}</option>
							@endforeach
						</select>


						<label for="pr_tax" class="required control-label">Tax:</label>
						<input type="number" name="pr_tax" id="pr_tax" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Tax" />

						<br></br>

						<div class="text-center">
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>

					</form>
				</div>			
			</div>
			<!--end::Card-->
			</div>
			<!--end::Content-->
	</div>
	</div>

@endsection