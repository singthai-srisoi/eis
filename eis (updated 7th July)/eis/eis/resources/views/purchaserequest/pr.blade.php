@extends('template')
@section('pr')

<!--begin::Page title-->

<!--end::Page title=-->

<!--begin::Tables Widget 9-->
<div class="card mb-5 mb-xl-10">
    <div class="card mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Purchase Request List</span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a PR">
                <a href="purchaseReq-form" class="btn btn-sm btn-light btn-active-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Add New</a>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                    <!--begin::Card-->
                    <div class="card">
                        <!-- Add the search input field -->
                        <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        <!--end::Card header-->
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
                                            <th class="min-w-50px">Comment</th>
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
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $tb_purchaserequest->pr_id }}</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_cdate }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_product->prod_name }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_ddate }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_qty }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_supplier->sup_name }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ number_format($tb_purchaserequest->pr_total, 2) }}</a>
                                            </td>

                                            <td>
                                            @if ($tb_purchaserequest->tb_approval->a_desc === "Pending")
                                                <a href="#" class="text-warning fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_approval->a_desc }}</a>
                                            @elseif ($tb_purchaserequest->tb_approval->a_desc === "Approved")
                                                <a href="#" class="text-success fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_approval->a_desc }}</a>
                                            @elseif ($tb_purchaserequest->tb_approval->a_desc === "Rejected")
                                                <a href="#" class="text-danger fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->tb_approval->a_desc }}</a>
                                            @else
                                                <!-- Handle any other cases here -->
                                            @endif
                                            </td>

                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ $tb_purchaserequest->pr_comment }}</a>
                                            </td>

                                            <td>
                                                <div class="d-flex">
                                                    <div class="me-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Invoice">
                                                        <a href="{{ route('purchaserequest/purchaseReq-invoice', ['pr_id' => $tb_purchaserequest->pr_id]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/good/releases/2022-08-13-004438/core/html/src/media/icons/duotune/communication/com002.svg-->
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M21 18H3C2.4 18 2 17.6 2 17V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V17C22 17.6 21.6 18 21 18Z" fill="currentColor"/>
                                                                    <path d="M11.4 13.5C11.8 13.8 12.3 13.8 12.6 13.5L21.6 6.30005C21.4 6.10005 21.2 6 20.9 6H2.99998C2.69998 6 2.49999 6.10005 2.29999 6.30005L11.4 13.5Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>

                                                    <div class="me-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                        <a href="{{ route('purchaserequest/pr-edit', ['pr_id' => $tb_purchaserequest->pr_id]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>

                                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" title="Delete">
                                                        <a onclick="return confirmDelete()" href="{{ route('purchaserequest.delete', ['pr_id' => $tb_purchaserequest->pr_id]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
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
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Tables Widget 9-->
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

        $(document).ready(function () {
            // Initialize DataTable with search functionality
            var table = $('#myTable').DataTable({
                searching: true
            });

            // Add event listener to the search input field
            $('#searchInput').on('keyup', function () {
                table.search(this.value).draw();
            });
        });

        </script>
        @endsection
