@extends('template')
@section('add-product')

<!--begin::Container-->
	<div class="container-xxl" id="add-product">
	<!--begin::Layout-->
	<div class="d-flex flex-column flex-lg-row">
		<!--begin::Content-->
			<div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
			<!--begin::Card-->
			<div class="card">
			<!--begin::Card body-->
				<div class="card-body p-12">
					<!--begin::Form-->
					<form action="add" method="POST">
						@csrf
						
						<label class="required control label">PRODUCT CODE</label>
						<input type="text" name="prod_code" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Code" />
						
						<label class="required control-label">PRODUCT NAME</label>
						<input type="text" name="prod_name" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Product Name" />

						<label class="required control-label">IMAGE</label>
						<input type="text" name="prod_image" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Upload Image" />

						<label class="required control-label">CATEGORY</label>
						<input type="number" name="prod_ctg" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Category" />

						<label class="required control-label">DESCRIPTION</label>
						<input type="text" name="prod_desc" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Product Name" />

						<label class="required control-label">SUPPLIER PRICE</label>
						<input type="number" name="prod_price" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Supplier" />

						<label class="required control-label">SELLING PRICE</label>
						<input type="number" name="prod_sellprice" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Price (RM)" />

						<label class="required control-label">STOCK </label>
						<input type="text" name="prod_stock" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Product Name" />

						<label class="required control-label">SUPPLIER ID</label>
						<input type="number" name="prod_supplierID" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Product Name" />

						<label class="required control-label">STATUS</label>
						<input type="number" name="prod_status" class="form-control form-control-solid mb-3" style="width: 150px;" placeholder="Enter Status" />

						<br></br>

						<div class="text-center">
							<button type="submit" class="btn btn-primary mr-2">Submit</button>							
							<button type="reset" class="btn btn-secondary">
							<a href="list-product" style="color: inherit; text-decoration: none;">Cancel</a>
							</button>
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

