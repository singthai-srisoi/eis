<!--begin::Cart-->
<div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_menu_shopping_cart_toggle">

    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
        <!--begin::Svg Icon-->
        <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
        </span>
        <!--end::Svg Icon-->
        <span class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-primary">{{count((array) session('cart'))}}</span>
    </div>

    <!--begin::Chat menu-->
    <div class="menu menu-sub menu-sub-dropdown w-300px w-lg-400px" data-kt-menu="true" data-kt-menu-close="#kt_menu_shopping_cart_close" data-kt-menu-toggle="#kt_menu_shopping_cart_toggle">
        <!--begin::Messenger-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header w-100 py-5 mb-4">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body py-1 pe-4">
                <!--begin::Items-->
                <div class="hover-scroll-y py-0 h-350px pe-4">
                    @php $total = 0 @endphp
                    @foreach((array) session('cart') as $id => $cart)
                    @php $total += $cart['prod_sellprice'] * $cart['quantity'] @endphp
                    @endforeach

                    <!--begin::Item-->
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $cart)

                    <div class="d-flex align-items-center">

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-3 flex-grow-1">
                            <!--begin::Section-->
                            <div class="mb-3">

                                <a href="" class="text-gray-800 text-hover-primary fs-4 fw-bold">{{$cart['prod_name']}}</a>
                            </div>
                            <!--end::Section-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <span class="text-muted mx-2">Quantity: </span>
                                <span class="fw-bold text-gray-800 fs-6 me-3">{{$cart['quantity']}}</span>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Pic-->
                        <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                            <img src="{{ asset('assets/media/products/' . $cart['prod_image']) }}" alt="" />
                        </div>
                        <!--end::Pic-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                    @endforeach
                    @endif
                </div>
                <!--end::Items-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer py-5">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-success fw-bolder fs-5">RM {{$total}}</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-5">
                    <a href="{{url('order-cust')}}" class="btn btn-sm btn-primary justify-content-end fw-bold">Go to Cart</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat menu-->
    </a>
</div>
<!--end::Cart-->