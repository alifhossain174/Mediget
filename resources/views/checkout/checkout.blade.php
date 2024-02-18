@extends('master')

@push('site-seo')
    @php
        $generalInfo = DB::table('general_infos')
            ->select('meta_title', 'meta_og_title', 'meta_keywords', 'meta_description', 'meta_og_description', 'meta_og_image', 'company_name', 'fav_icon')
            ->where('id', 1)
            ->first();
    @endphp
    <meta name="keywords" content="{{ $generalInfo ? $generalInfo->meta_keywords : '' }}" />
    <meta name="description" content="{{ $generalInfo ? $generalInfo->meta_description : '' }}" />
    <meta name="author" content="{{ $generalInfo ? $generalInfo->company_name : '' }}">
    <meta name="copyright" content="{{ $generalInfo ? $generalInfo->company_name : '' }}">
    <meta name="url" content="{{ env('APP_URL') }}">

    {{-- Page Title & Favicon --}}
    <title>
        @if ($generalInfo && $generalInfo->meta_title)
            {{ $generalInfo->meta_title }}
        @else
            {{ $generalInfo->company_name }}
        @endif
    </title>
    @if ($generalInfo && $generalInfo->fav_icon)
        <link rel="icon" href="{{ env('ADMIN_URL') . '/' . $generalInfo->fav_icon }}" type="image/x-icon"/>
    @endif

    {{-- open graph meta --}}
    <meta property="og:title" content="@if ($generalInfo && $generalInfo->meta_og_title) {{ $generalInfo->meta_og_title }} @else {{ $generalInfo->company_name }} @endif" />
    <meta property="og:type" content="Ecommerce" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:image" content="{{ env('ADMIN_URL') . '/' . $generalInfo->meta_og_image }}" />
    <meta property="og:site_name" content="{{ $generalInfo ? $generalInfo->company_name : '' }}" />
    <meta property="og:description" content="{{ $generalInfo->meta_og_description }}" />
@endpush

@section('header_css')
    <link href="{{url('assets')}}/css/plugins/select2.min.css" rel="stylesheet" type="text/css" />
    <style>
        .select2-selection{
            height: 34px !important;
            border: 1px solid #ced4da !important;
        }
        .select2 {
            width: 100% !important;
        }

        .select2 .selection{
            width: 100%;
        }

        .select2-selection{
            height: 40px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 37px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow{
            top: 6px !important;
        }

        .select-style-2 .nice-select .list{
            max-height: 240px;
            overflow: scroll;
        }
    </style>
@endsection

@section('content')

    @include('checkout.breadcrumbs')

    <!-- Checkout Page Area -->
    <section class="checkout-area">
        <div class="container-fluid">

            <form action="{{url('place/order')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-xl-7 col-12">
                        <div class="checkout-order-review">
                            <h5 class="checkout-widget-title">Order review</h5>
                            <div class="checkout-order-review-inner">
                                <table style="width: 100%" class="cart-single-product-table">
                                    <thead>
                                        <tr class="cart-single-product-table-head">
                                            <th class="table-head-1" scope="col">Product name</th>
                                            <th class="table-head-2" scope="col">Quantity</th>
                                            <th class="table-head-3" scope="col">Unit price</th>
                                            <th class="table-head-4" scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('checkout.cart_items')
                                    </tbody>
                                </table>
                                <div class="checkout-review-table-bottom">
                                    <div class="row g-0">

                                        <div class="col-lg-5 col-md-8 col-12">
                                            @include('checkout.coupon')
                                        </div>

                                        <div class="col-lg-5 offset-lg-2 col-md-8 col-12">
                                            <div class="order-review-summary">
                                                @include('checkout.order_total')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-special-note">
                                <h5 class="checkout-widget-title">Special notes</h5>
                                <div class="checkout-special-note-box">
                                    <div class="form-group">
                                        <textarea name="special_note"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-4 offset-xl-1 col-md-10 col-12 order-class">

                        @include('checkout.order_form')

                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Checkout Page Area -->
@endsection

@section('footer_js')
    <script src="{{url('assets')}}/js/plugins/select2.min.js"></script>
    <script>
        $('[data-toggle="select2"]').select2();

        function removeCartItems(id){
            $.get("{{ url('remove/cart/item') }}" +'/' + id, function (data) {

                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1000;
                toastr.error("Item is Removed");
                $(".offCanvas__minicart").html(data.rendered_cart);
                $("a.minicart__open--btn span.items__count").html(data.cartTotalQty);

                $("table.cart-single-product-table tbody").html(data.checkoutCartItems);
                $(".order-review-summary").html(data.checkoutTotalAmount);

                if(data.cartTotalQty <= 0){
                    setTimeout(function() {
                        window.location.href = '{{ url('/') }}';
                    }, 1000);
                }
            })
        }

        function applyCoupon(){
            var couponCode = $("#coupon_code").val();
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.options.timeOut = 1000;

            if(couponCode == ''){
                toastr.error("Please Enter a Coupon Code");
                return false;
            }

            var formData = new FormData();
            formData.append("coupon_code", couponCode);
            $.ajax({
                data: formData,
                url: "{{ url('apply/coupon') }}",
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if(data.status == 0){
                        toastr.error(data.message);
                        $(".order-review-summary").html(data.checkoutTotalAmount);
                    } else {
                        toastr.success(data.message);
                        $(".order-review-summary").html(data.checkoutTotalAmount);
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        }

        $(document).ready(function () {

            $('#shipping_district_id').on('change', function () {
                var district_id = this.value;
                $("#shipping_thana_id").html('');
                $.ajax({
                    url: "{{url('/district/wise/thana')}}",
                    type: "POST",
                    data: {
                        district_id: district_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#shipping_thana_id').html('<option data-display="Select One" value="">Select Thana</option>');
                        $.each(result.data, function (key, value) {
                            $("#shipping_thana_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        $(".order-review-summary").html(result.checkoutTotalAmount);
                    }
                });
            });

            $('#billing_district_id').on('change', function () {
                var district_id = this.value;
                $("#billing_thana_id").html('');
                $.ajax({
                    url: "{{url('/district/wise/thana')}}",
                    type: "POST",
                    data: {
                        district_id: district_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#billing_thana_id').html('<option data-display="Select One" value="">Select Thana</option>');
                        $.each(result.data, function (key, value) {
                            $("#billing_thana_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });

        function applySavedAddress(slug){

            // fetching the values
            var address = $("#saved_address_line_"+slug).val();
            var district = $("#saved_address_district_"+slug).val();
            var upazila = $("#saved_address_upazila_"+slug).val();
            var post_code = $("#saved_address_post_code_"+slug).val();

            // setting the values
            $("#shipping_address").val(address);
            $("#shipping_district_id option:contains('" + district + "')").prop("selected", true).change();
            setTimeout(function() {
                $("#shipping_thana_id option:contains('" + upazila + "')").prop("selected", true).change();
            }, 1000);
            $("#shipping_postal_code").val(post_code);

            var isChecked = $('#flexCheckChecked').prop('checked');
            if (isChecked) {
                $('#flexCheckChecked').trigger('click');
            }

        }

        function sameShippingBilling(){

            if($("#flexCheckChecked").prop('checked') == true){
                var shppingAdress = $("#shipping_address").val();
                var shppingDistrict = $("#shipping_district_id").val();
                var shppingThana = $("#shipping_thana_id").val();
                var shppingPostalCode = $("#shipping_postal_code").val();

                if(shppingAdress == '' || shppingAdress == null){
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1000;
                    toastr.error("Please Write Shipping Address");
                    return false;
                }
                if(shppingDistrict == '' || shppingDistrict == null){
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1000;
                    toastr.error("Please Select Shipping District");
                    return false;
                }
                if(shppingThana == '' || shppingThana == null){
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1000;
                    toastr.error("Please Select Shipping Thana");
                    return false;
                }

                $("#billing_address").val(shppingAdress);
                $("#billing_district_id").val(shppingDistrict).change();
                $("#billing_postal_code").val(shppingPostalCode);

                var district_id = shppingDistrict;
                $("#billing_thana_id").html('');
                $.ajax({
                    url: "{{url('/district/wise/thana')}}",
                    type: "POST",
                    data: {
                        district_id: district_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#billing_thana_id').html('<option data-display="Select One" value="">Select Thana</option>');
                        $.each(result.data, function (key, value) {
                            $("#billing_thana_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        $("#billing_thana_id").val(shppingThana).change();
                        $(".order-review-summary").html(result.checkoutTotalAmount);
                    }
                });
            } else {
                $("#billing_address").val(shppingAdress);
                $("#billing_district_id").val('').change();
                $("#billing_thana_id").html('');
                $('#billing_thana_id').html('<option data-display="Select One" value="">Select Thana</option>');
                $("#billing_postal_code").val('');
            }

        }

        function changeDeliveryMethod(value){

            var district_id = $("#shipping_district_id").val();
            var delivery_method = value;

            $.ajax({
                url: "{{url('/change/delivery/method')}}",
                type: "POST",
                data: {
                    district_id: district_id,
                    delivery_method: delivery_method,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $(".order-review-summary").html(result.checkoutTotalAmount);
                }
            });
        }
    </script>
@endsection
