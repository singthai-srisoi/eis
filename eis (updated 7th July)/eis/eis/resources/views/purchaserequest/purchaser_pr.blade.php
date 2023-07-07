@extends('purchaser')

@section('title', 'Purchase Request')

@section('PageTitle')
    <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
        data-kt-swapper="true" data-kt-swapper-mode="prepend"
        data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
        <!--begin::Heading-->
        <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Purchase Request</h1>
        <!--end::Heading-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
            <li class="breadcrumb-item text-muted">
                <a href="#" class="text-muted">Home</a>
            </li>
            <li class="breadcrumb-item text-muted">Purchase Request</li>
            <li class="breadcrumb-item text-dark">Index</li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" id="searchInput" data-kt-ecommerce-product-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Purchase Request" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select id="statusFilter" class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                <option></option>
                                <option value="all" {{$id == null ? 'selected' : ''}}>All</option>
                                @foreach($tb_approvals as $tb_approval)
                                    <option value="{{ $tb_approval->a_id }}" {{$tb_approval->a_id == $id ? 'selected' : ''}}>{{ $tb_approval->a_desc}}</option>
                                @endforeach
                            </select>
                            <!--end::Select2-->
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                @if ($message = Session::get('success'))
                    <!--begin::Alert-->
                    <div class="alert alert-dismissible alert-primary d-flex align-items-center">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column">
                            <!--begin::Title-->
                            <h4 class="mb-1 text-dark">{{ $message }}</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Close-->
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                        <!--end::Close-->
                    </div>
                    <!--end::Alert-->
                @endif

                <!--begin::Body-->
                <div class="card-body py-6">
                    <!--begin::Table container-->

                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="myTable" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">

                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th class="min-w-50px">#</th>
                                    <th class="min-w-50px">PR Number</th>
                                    <th class="min-w-50px">Created Date</th>
                                    <th class="min-w-50px">Item</th>
                                    <th class="min-w-50px">Delivery Date</th>
                                    <th class="min-w-50px">QTY</th>
                                    <th class="min-w-50px">Supplier</th>
                                    <th class="min-w-50px">Total Price</th>
                                    <th class="min-w-50px">Status</th>
                                    <th class="min-w-50px">Action</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($tb_purchaserequest as $tb_purchaserequest)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">
                                                        {{ $loop->iteration }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bold text-hover-primary fs-6">PR{{ str_pad($tb_purchaserequest->pr_id, 8, '0', STR_PAD_LEFT) }}</a>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_cdate }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_product->prod_name }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_ddate }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_qty }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_supplier->sup_name }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ number_format($tb_purchaserequest->pr_total, 2) }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_approval->a_desc }}</a>
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <div class="me-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    title="Invoice">
                                                    <a href="{{ route('purchaserequest/purchaser_invoice', ['pr_id' => $tb_purchaserequest->pr_id]) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/good/releases/2022-08-13-004438/core/html/src/media/icons/duotune/communication/com002.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M21 18H3C2.4 18 2 17.6 2 17V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V17C22 17.6 21.6 18 21 18Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M11.4 13.5C11.8 13.8 12.3 13.8 12.6 13.5L21.6 6.30005C21.4 6.10005 21.2 6 20.9 6H2.99998C2.69998 6 2.49999 6.10005 2.29999 6.30005L11.4 13.5Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->

                        </table>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

    <script>
        function confirmDelete() {
            if (confirm('Are you sure you want to delete?')) {
                // User confirmed, allow the default link action (deletion)
                return true;
            } else {
                // User canceled, prevent the default link action (deletion)
                return false;
            }
        }

        $(document).ready(function() {
            // Initialize DataTable with search functionality
            var table = $('#myTable').DataTable({
                searching: true
            });

            // Add event listener to the search input field
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            table
                .on('order.dt search.dt', function () {
                    var i = 1;

                    table.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
                        this.data(i++);
                    });
                })
                .draw();

            $('#statusFilter').on('change', function(e){

                var id = $(this).val();
                if(id=='all'){
                    var url = "/purchaser_pr";
                }
                else{
                    var url = "/purchaser_pr/" + id;
                }
                window.location.href = url;

            });
        });
    </script>
@endsection
