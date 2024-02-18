@extends('master')

@push('site-seo')
    @php
        $generalInfo = DB::table('general_infos')->select('fav_icon', 'company_name')->where('id', 1)->first();
    @endphp

    <meta name="keywords" content="{{$product ? $product->meta_keywords : ''}}" />
    <meta name="description" content="{{$product ? $product->meta_description : ''}}" />
    <meta name="author" content="{{$generalInfo ? $generalInfo->company_name : ''}}">
    <meta name="copyright" content="{{$generalInfo ? $generalInfo->company_name : ''}}">
    <meta name="url" content="{{env('APP_URL')."/product/details/".$product->slug}}">

    <title>@if($product->meta_title){{$product->meta_title}}@else{{$product->name}}@endif</title>
    @if($generalInfo && $generalInfo->fav_icon)<link rel="icon" href="{{env('ADMIN_URL')."/".($generalInfo->fav_icon)}}" type="image/x-icon"/>@endif

    <!-- Open Graph general (Facebook, Pinterest)-->
    <meta property="og:title" content="@if($product->meta_title){{$product->meta_title}}@else{{$product->name}}@endif"/>
    <meta property="og:type" content="{{$product->category_name}}"/>
    <meta property="og:url" content="{{env('APP_URL')."/product/details/".$product->slug}}"/>
    <meta property="og:image" content="{{env('ADMIN_URL')."/".$product->image}}"/>
    <meta property="og:site_name" content="{{$generalInfo ? $generalInfo->company_name : ''}}"/>
    <meta property="og:description" content="{{$product->short_description}}"/>
    <!-- End Open Graph general (Facebook, Pinterest)-->
@endpush

@section('header_css')
    <style>
        .removeFromCartQty{
            background: var(--alert-color);
        }
        .removeFromCartQty:hover{
            background: var(--alert-color) !important;
        }
    </style>
@endsection

@section('content')

    {{-- breadcrumb --}}
    @include('product_details.breadcrumb')

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9 col-md-10 col-12">
                    <div class="row align-items-center">

                        {{-- gallery --}}
                        @include('product_details.gallery')

                        <div class="col-lg-6 col-12">
                            <div class="product__details--info">

                                @php
                                    $totalStockAllVariants = 0; // jekonon variant er at least ekta stock e thakleo stock in dekhabe
                                    if ($variants && count($variants) > 0) {
                                        $variantMinDiscountPrice = 0;
                                        $variantMinPrice = 0;
                                        $variantMinDiscountPriceArray = [];
                                        $variantMinPriceArray = [];

                                        foreach ($variants as $variant) {
                                            $variantMinDiscountPriceArray[] = $variant->discounted_price;
                                            $variantMinPriceArray[] = $variant->price;
                                            $totalStockAllVariants = $totalStockAllVariants + (int) $variant->stock;
                                        }

                                        $variantMinDiscountPrice = min($variantMinDiscountPriceArray);
                                        $variantMinPrice = min($variantMinPriceArray);
                                    }
                                @endphp

                                {{-- short info --}}
                                @include('product_details.short_info')


                                <!-- Product Info Main -->
                                <div class="product-d-info-main">
                                    <div class="product-d-info-main-inner">

                                        <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">

                                        @include('product_details.price_wishlist')

                                        @if ($variants && count($variants) > 0)
                                            <div class="product-d-info-main-bottom">

                                                <!-- Single Quantity Widget -->
                                                @foreach ($variants as $index => $variant)
                                                    <div class="product-d-info-quantity">
                                                        <label class="form-check-label" for="exampleRadios{{$index}}">
                                                            <div class="product-d-info-quantity-left">
                                                                <input class="form-check-input" type="radio" onclick="changePrice({{$variant->discounted_price}}, {{$variant->price}}, {{$index}})" data-discount-price="{{ $variant->discounted_price }}" data-price="{{ $variant->price }}" name="unit_id[]" id="exampleRadios{{$index}}" value="{{ $variant->unit_id }}"/>
                                                                <p id="unit_name_{{$index}}">{{ $variant->unit_name }}</p>
                                                            </div>
                                                            <div class="product-d-info-quantity-right">
                                                                <div class="product-d-info-quantity-increment-decrement">
                                                                    <span class="quantity-btn" onclick="decrementQuantity({{$variant->discounted_price}}, {{$variant->price}}, {{$index}})"><i class="fi-rr-minus"></i></span>
                                                                    <input type="text" class="quantity-input" id="quantity{{$index}}" value="1" readonly />
                                                                    <span class="quantity-btn" onclick="incrementQuantity({{$variant->discounted_price}}, {{$variant->price}}, {{$index}})"><i class="fi-rr-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        @endif

                                    </div>

                                    @if ($variants && count($variants) > 0)
                                        <div class="product-d-total-widget">
                                            <p>Total amount</p>
                                            <strong id="total_cart_qty_amount">0 BDT</strong>
                                        </div>
                                    @endif

                                    <div class="product-d-info-btn">
                                        @if ($variants && count($variants) > 0)
                                            @if ($totalStockAllVariants > 0)
                                                @include('product_details.cart_buy_now')
                                            @else
                                                @include('product_details.stock_out')
                                            @endif
                                        @else
                                            @if ($product->stock && $product->stock > 0)
                                                @include('product_details.cart_buy_now')
                                            @else
                                                @include('product_details.stock_out')
                                            @endif
                                        @endif
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    @include('product_details.delivery')
    @include('product_details.description')
    @if (count($mayLikedProducts) > 0)
        @include('product_details.you_may_like')
    @endif
@endsection

@section('footer_js')
    <script>

        // get the already clicked variant after page load
        $( document ).ready(function() {
            let unitFields = document.getElementsByName("unit_id[]");
            for (let i = 0; i < unitFields.length; i++) {
                if (unitFields[i].checked) {
                    unitFields[i].click();
                }
            }
        });

        function changePrice(discount_price, price, index){
            var actualPrice = discount_price > 0 ? Number(discount_price) : Number(price);
            var unit_name = $("#unit_name_"+index).html();
            var qty = Number($("#quantity"+index).val());
            $("#total_cart_qty_amount").html((actualPrice*qty)+" BDT<span>("+qty+" "+unit_name+")");
        }

        function incrementQuantity(discount_price, price, index) {
            const inputField = document.getElementById('quantity'+index);
            const currentValue = parseInt(inputField.value, 10);
            inputField.value = currentValue + 1;

            var actualPrice = discount_price > 0 ? Number(discount_price) : Number(price);
            var unit_name = $("#unit_name_"+index).html();
            var qty = Number($("#quantity"+index).val());
            $("#total_cart_qty_amount").html((actualPrice*qty)+" BDT<span>("+qty+" "+unit_name+")");
        }

        function decrementQuantity(discount_price, price, index) {
            const inputField = document.getElementById('quantity'+index);
            const currentValue = parseInt(inputField.value, 10);
            if (currentValue > 1) {
                inputField.value = currentValue - 1;
            }

            var actualPrice = discount_price > 0 ? Number(discount_price) : Number(price);
            var unit_name = $("#unit_name_"+index).html();
            var qty = Number($("#quantity"+index).val());
            $("#total_cart_qty_amount").html((actualPrice*qty)+" BDT<span>("+qty+" "+unit_name+")");
        }


        $('body').on('click', '.addToCartWithQty', function () {
            var id = $(this).data('id');

            let unit_id = null;
            let qty = 1;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.options.timeOut = 1000;

            // unit
            let unitFields = document.getElementsByName("unit_id[]");
            if(unitFields){
                for (let i = 0; i < unitFields.length; i++) {
                    if (unitFields[i].checked) {
                        unit_id = unitFields[i].value;
                        qty = Number($("#quantity"+i).val());
                    }
                }
                if(unitFields.length > 0 && unit_id == null){
                    toastr.error("Please Select Unit");
                    return false;
                }
            }


            // sending request
            var formData = new FormData();
            formData.append("product_id", Number($("#product_id").val()));
            formData.append("qty", Number(qty));
            formData.append("unit_id", unit_id);


            $.ajax({
                data: formData,
                url: "{{ url('add/to/cart/with/qty') }}",
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    toastr.success("Added to Cart");
                    $(".offCanvas__minicart").html(data.rendered_cart);
                    $(".product-d-info-btn").html(data.details_button);
                    $("a.minicart__open--btn span.items__count").html(data.cartTotalQty);
                },
                error: function (data) {
                    toastr.error("Something Went Wrong");
                }
            });
        });



        $('body').on('click', '.buyNowWithQty', function () {
            var id = $(this).data('id');

            let unit_id = null;
            let qty = 1;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.options.timeOut = 1000;

            // unit
            let unitFields = document.getElementsByName("unit_id[]");
            if(unitFields){
                for (let i = 0; i < unitFields.length; i++) {
                    if (unitFields[i].checked) {
                        unit_id = unitFields[i].value;
                        qty = Number($("#quantity"+i).val());
                    }
                }
                if(unitFields.length > 0 && unit_id == null){
                    toastr.error("Please Select Unit");
                    return false;
                }
            }


            // sending request
            var formData = new FormData();
            formData.append("product_id", Number($("#product_id").val()));
            formData.append("qty", Number(qty));
            formData.append("unit_id", unit_id);


            $.ajax({
                data: formData,
                url: "{{ url('add/to/cart/with/qty') }}",
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    window.location.href = "/checkout";
                },
                error: function (data) {
                    toastr.error("Something Went Wrong");
                }
            });
        });


        $('body').on('click', '.removeFromCartQty', function () {
            var id = $(this).data('id');
            $.get("{{ url('remove/cart/item') }}" +'/' + id, function (data) {
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1000;
                toastr.error("Removed from cart");
                $(".offCanvas__minicart").html(data.rendered_cart);
                $(".product-d-info-btn").html(data.details_button);
                $("a.minicart__open--btn span.items__count").html(data.cartTotalQty);
            })
        });

    </script>
@endsection
