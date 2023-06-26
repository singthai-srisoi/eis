@extends('template')
@section('order-dashboard')


<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" style="width: 1100px" id="kt_content_container">

        <!--begin::Tables Widget 13-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Over 500 orders</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="btn btn-secondary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Add New Packaging Status</a>
                        </div>
                        <div class="separator mb-3 opacity-75"></div>
                        <div class="menu-item px-3">
                            <a href="#" class="btn btn-secondary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#statusListModal">Edit/Delete Status</a>
                        </div>

                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th class="w-25px">

                                    </th>
                                    <th class="min-w-140px">Order Id</th>
                                    <th class="min-w-140px">Order Payment Status</th>
                                    <th class="min-w-120px">Date Issued</th>
                                    <th class="min-w-120px">Total</th>
                                    <th class="min-w-120px">Status</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($orders as $order)
                                @if ($order->o_status == 'Paid' && $order->o_pack_stat === null)
                                <tr>
                                    <td class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                        </div>
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">{{ $order->o_id }}</span>
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">{{ $order->o_status }}</span>
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">{{ $order->o_dateIssued }}</span>
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">{{ $order->o_totalAmount }}</span>
                                    </td>
                                    <td class="text-center pe-0" style="width: 175px;">
                                        <form action="{{ route('update-order', $order->o_id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="o_id" value="{{ $order->o_id }}">
                                            <select class="form-select" name="pack_status_id">
                                                <option value="" selected>--Select Option--</option>
                                                @foreach ($packStatuses as $status)
                                                <option value="{{ $status->pac_stat_id }}">{{ $status->pac_stat_desc }}</option>
                                                @endforeach
                                            </select>
                                    </td>
                                    <td class="text-end">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                        </form>
                                    </td>

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
            <!-- Unpack Table -->

            <div class="card">
                <div class="card-body py-3">
                    <h4>Unpack Orders</h4>
                    <div class="table-responsive">
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <thead>
                                <tr>
                                    <th class="w-25px"></th>
                                    <th class="text-center pe-0">Order ID</th>
                                    <th class="text-center pe-0">Order Payment Status</th>
                                    <th class="text-center pe-0">Date Issued</th>
                                    <th class="text-center pe-0">Total</th>
                                    <th class="text-center pe-0">Status</th>
                                    <th class="text-center pe-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($unpackOrders as $order)
                                <tr>
                                    <td class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                        </div>
                                    </td>
                                    <td class="text-center pe-0">{{ $order->o_id }}</td>
                                    <td class="text-center pe-0">{{ $order->o_status}}</td>
                                    <td class="text-center pe-0">{{ $order->o_dateIssued }}</td>
                                    <td class="text-center pe-0">{{ $order->o_totalAmount }}</td>
                                    <td class="text-center pe-0" style="width: 175px;">
                                        <form action="{{ route('update-order', $order->o_id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="o_id" value="{{ $order->o_id }}">
                                            <select class="form-select" name="pack_status_id" disabled>
                                                <option value="" selected>--Select Option--</option>
                                                @foreach ($packStatuses as $status)
                                                <option value="{{ $status->pac_stat_id }}">{{ $status->pac_stat_desc }}</option>
                                                @endforeach
                                            </select>
                                    </td>
                                    <td class="text-center pe-0">
                                        <button type="button" class="btn btn-primary btn-sm" onclick="enableDropdown(this)">Edit</button>
                                        <button type="submit" class="btn btn-primary btn-sm" style="display: none;">Update</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Pack Table -->
            <div class="card">
                <div class="card-body py-3">
                    <h4>Pack Orders</h4>
                    <div class="table-responsive">
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <thead>
                                <tr>
                                    <th class="w-25px"></th>
                                    <th class="text-center pe-0">Order ID</th>
                                    <th class="text-center pe-0">Order Payment Status</th>
                                    <th class="text-center pe-0">Date Issued</th>
                                    <th class="text-center pe-0">Total</th>
                                    <th class="text-center pe-0">Status</th>
                                    <th class="text-center pe-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packOrders as $order)
                                <tr>
                                    <td class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                        </div>
                                    </td>
                                    <td class="text-center pe-0">{{ $order->o_id }}</td>
                                    <td class="text-center pe-0">{{ $order->o_status}}</td>
                                    <td class="text-center pe-0">{{ $order->o_dateIssued }}</td>
                                    <td class="text-center pe-0">{{ $order->o_totalAmount }}</td>
                                    <td class="text-center pe-0" style="width: 175px;">
                                        <form action="{{ route('update-order', $order->o_id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="o_id" value="{{ $order->o_id }}">
                                            <select class="form-select" name="pack_status_id" disabled>
                                                <option value="" selected>--Select Option--</option>
                                                @foreach ($packStatuses as $status)
                                                <option value="{{ $status->pac_stat_id }}" {{ $status->pac_stat_desc === 'Pack' && $order->pack_status_id == $status->pac_stat_id ? 'selected' : '' }}>
                                                    {{ $status->pac_stat_desc }}
                                                </option>
                                                @endforeach
                                            </select>
                                    </td>
                                    <td class="text-center pe-0">
                                        <button type="button" class="btn btn-primary btn-sm" onclick="enableDropdown(this)">Edit</button>
                                        <button type="submit" class="btn btn-primary btn-sm" style="display: none;">Update</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




            <!-- Transfer to Logistic Table -->

            <div class="card">
                <div class="card-body py-3">
                    <h4>Transfer to Logistic Orders</h4>
                    <div class="table-responsive">
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <thead>
                                <tr>
                                    <th class="w-25px"></th>
                                    <th class="text-center pe-0">Order ID</th>
                                    <th class="text-center pe-0">Order Payment Status</th>
                                    <th class="text-center pe-0">Date Issued</th>
                                    <th class="text-center pe-0">Total</th>
                                    <th class="text-center pe-0">Status</th>
                                    <th class="text-center pe-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transferOrders as $order)
                                <tr>
                                    <td class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                        </div>
                                    </td>
                                    <td class="text-center pe-0">{{ $order->o_id }}</td>
                                    <td class="text-center pe-0">{{ $order->product->o_status}}</td>
                                    <td class="text-center pe-0">{{ $order->o_dateIssued }}</td>
                                    <td class="text-center pe-0">{{ $order->o_totalAmount }}</td>
                                    <td class="text-center pe-0" style="width: 175px;">
                                        <form action="{{ route('update-order', $order->o_id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="o_id" value="{{ $order->o_id }}">
                                            <select class="form-select" name="pack_status_id" disabled>
                                                <option value="" selected>--Select Option--</option>
                                                @foreach ($packStatuses as $status)
                                                <option value="{{ $status->pac_stat_id }}">{{ $status->pac_stat_desc }}</option>
                                                @endforeach
                                            </select>
                                    </td>
                                    <td class="text-center pe-0">
                                        <button type="button" class="btn btn-warning btn-sm" onclick="enableDropdown(this)">Edit</button>
                                        <button type="submit" class="btn btn-primary btn-sm" style="display: none;">Update</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 13-->


    <!--begin::Modal - New Card-->
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add New Packaging Status</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_new_card_form" class="form" action="{{ route('add-status') }}" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Status</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the packaging status description"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="pac_stat_desc" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Back</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->

            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->



    <!-- Status List Modal -->
    <div class="modal fade" id="statusListModal" tabindex="-1" aria-labelledby="statusListModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusListModalLabel">Status List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Status Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packStatuses as $status)
                            <tr>
                                <td>{{ $status->pac_stat_desc }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary edit-status-btn" data-id="{{ $status->pac_stat_id }}" data-description="{{ $status->pac_stat_desc }}">Edit</button>
                                    <button class="btn btn-sm btn-danger delete-status-btn" data-id="{{ $status->pac_stat_id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Status Modal -->
    <div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editStatusModalLabel">Edit Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit Status Form -->
                    <form id="editStatusForm" action="{{ route('update-status') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="editStatusId" name="pac_stat_id">
                        <div class="mb-3">
                            <label for="editStatusDescription" class="form-label">Status Description</label>
                            <input type="text" class="form-control" id="editStatusDescription" name="pac_stat_desc" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Status Modal -->
    <div class="modal fade" id="deleteStatusModal" tabindex="-1" aria-labelledby="deleteStatusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteStatusModalLabel">Delete Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this status?</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteStatusForm" action="{{ route('delete-status') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="deleteStatusId" name="pac_stat_id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!--end::Container-->
</div>
<!--end::Content-->

</html>

<script>
    function enableDropdown(button) {
        const row = button.closest('tr');
        const select = row.querySelector('select');
        const updateButton = row.querySelector('button[type="submit"]');

        select.disabled = false;
        select.focus();
        button.style.display = 'none';
        updateButton.style.display = '';
    }

    // Listen for form submission
    document.getElementById('kt_modal_new_card_form').addEventListener('submit', function(event) {
        // Prevent form submission
        event.preventDefault();

        // Show success dialog
        alert('Status successfully added!');

        // Submit the form
        event.target.submit();
    });


    // Edit Status button click
    const editStatusButtons = document.getElementsByClassName('edit-status-btn');
    Array.from(editStatusButtons).forEach(function(button) {
        button.addEventListener('click', function(event) {
            const statusId = event.target.dataset.id;
            const statusDescription = event.target.dataset.description;

            document.getElementById('editStatusId').value = statusId;
            document.getElementById('editStatusDescription').value = statusDescription;

            // Show the Edit Status Modal
            const editStatusModal = new bootstrap.Modal(document.getElementById('editStatusModal'));
            editStatusModal.show();
        });
    });

    // Delete Status button click
    const deleteStatusButtons = document.getElementsByClassName('delete-status-btn');
    Array.from(deleteStatusButtons).forEach(function(button) {
        button.addEventListener('click', function(event) {
            const statusId = event.target.dataset.id;

            document.getElementById('deleteStatusId').value = statusId;

            // Show the Delete Status Modal
            const deleteStatusModal = new bootstrap.Modal(document.getElementById('deleteStatusModal'));
            deleteStatusModal.show();
        });
    });
</script>


@endsection