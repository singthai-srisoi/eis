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
									<div class="fw-bold fs-3">#13443</div>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row">
									<!--begin::Label-->
									<label class="required form-label">Payment Method</label>
									<!--end::Label-->
									<!--begin::Select2-->
									<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="payment_method" id="kt_ecommerce_edit_order_payment">
										<option></option>
										<option value="cod">Cash on Delivery</option>
										<option value="visa">Credit Card (Visa)</option>
										<option value="mastercard">Credit Card (Mastercard)</option>
										<option value="paypal">Paypal</option>
									</select>
									<!--end::Select2-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Set the date of the order to process.</div>
									<!--end::Description-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row">
									<!--begin::Label-->
									<label class="required form-label">Shipping Method</label>
									<!--end::Label-->
									<!--begin::Select2-->
									<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="shipping_method" id="kt_ecommerce_edit_order_shipping">
										<option></option>
										<option value="none">N/A - Virtual Product</option>
										<option value="standard">Standard Rate</option>
										<option value="express">Express Rate</option>
										<option value="speed">Speed Overnight Rate</option>
									</select>
									<!--end::Select2-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Set the date of the order to process.</div>
									<!--end::Description-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row">
									<!--begin::Label-->
									<label class="required form-label">Order Date</label>
									<!--end::Label-->
									<!--begin::Editor-->
									<input id="kt_ecommerce_edit_order_date" name="order_date" placeholder="Select a date" class="form-control mb-2" value="" />
									<!--end::Editor-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Set the date of the order to process.</div>
									<!--end::Description-->
								</div>
								<!--end::Input group-->
							</div>
						</div>
						<!--end::Card header-->
					</div>
					<!--end::Order details-->


										<!--begin::Order details-->
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
								<div class="fs-3 fw-bold mb-n2">Billing Address</div>
								<!--end::Title-->
								<!--begin::Input group-->
								<div class="d-flex flex-column flex-md-row gap-5">
									<div class="fv-row flex-row-fluid">
										<!--begin::Label-->
										<label class="required form-label">Address Line 1</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" name="billing_order_address_1" placeholder="Address Line 1" value="" />
										<!--end::Input-->
									</div>
									<div class="flex-row-fluid">
										<!--begin::Label-->
										<label class="form-label">Address Line 2</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" name="billing_order_address_2" placeholder="Address Line 2" />
										<!--end::Input-->
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column flex-md-row gap-5">
									<div class="flex-row-fluid">
										<!--begin::Label-->
										<label class="form-label">City</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" name="billing_order_city" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<div class="fv-row flex-row-fluid">
										<!--begin::Label-->
										<label class="required form-label">Postcode</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" name="billing_order_postcode" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<div class="fv-row flex-row-fluid">
										<!--begin::Label-->
										<label class="required form-label">State</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" name="billing_order_state" placeholder="" value="" />
										<!--end::Input-->
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row">
									<!--begin::Label-->
									<label class="required form-label">Country</label>
									<!--end::Label-->
									<!--begin::Select2-->
									<select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_billing_country" name="billing_order_country">
										<option></option>
										<option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
										<option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
										<option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
									</select>
									<!--end::Select2-->
								</div>
								<!--end::Input group-->
								<!--begin::Checkbox-->
								<div class="form-check form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" id="same_as_billing" checked="checked" />
									<label class="form-check-label" for="same_as_billing">Shipping address is the same as billing address</label>
								</div>
								<!--end::Checkbox-->
								<!--begin::Shipping address-->
								<div class="d-none d-flex flex-column gap-5 gap-md-7" id="kt_ecommerce_edit_order_shipping_form">
									<!--begin::Title-->
									<div class="fs-3 fw-bold mb-n2">Shipping Address</div>
									<!--end::Title-->
									<!--begin::Input group-->
									<div class="d-flex flex-column flex-md-row gap-5">
										<div class="fv-row flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">Address Line 1</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="kt_ecommerce_edit_order_address_1" placeholder="Address Line 1" value="" />
											<!--end::Input-->
										</div>
										<div class="flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">Address Line 2</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="kt_ecommerce_edit_order_address_2" placeholder="Address Line 2" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column flex-md-row gap-5">
										<div class="flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">City</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="kt_ecommerce_edit_order_city" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<div class="fv-row flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">Postcode</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="kt_ecommerce_edit_order_postcode" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<div class="fv-row flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">State</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="kt_ecommerce_edit_order_state" placeholder="" value="" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="form-label">Country</label>
										<!--end::Label-->
										<!--begin::Select2-->
										<select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_shipping_country">
											<option></option>
											<option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
											<option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
											<option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
										</select>
										<!--end::Select2-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Shipping address-->
							</div>
							<!--end::Billing address-->

						</div>
						<!--end::Card body-->
					</div>
					<!--end::Order details-->