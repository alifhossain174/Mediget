@extends('master')

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
                                    if($variants && count($variants) > 0){
                                        $variantMinDiscountPrice = 0;
                                        $variantMinPrice = 0;
                                        $variantMinDiscountPriceArray = array();
                                        $variantMinPriceArray = array();

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

                                        @include('product_details.price_wishlist')

                                        @if($variants && count($variants) > 0)
                                        <div class="product-d-info-main-bottom">
                                            <!-- Single Quantity Widget -->
                                            <div class="product-d-info-quantity">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <div class="product-d-info-quantity-left">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios1" value="option1" />
                                                        <p>Piece</p>
                                                    </div>
                                                    <div class="product-d-info-quantity-right">
                                                        <div class="product-d-info-quantity-increment-decrement">
                                                            <span class="quantity-btn"
                                                                onclick="decrementQuantity('quantity1')"><i
                                                                    class="fi-rr-minus"></i></span>
                                                            <input type="text" class="quantity-input" id="quantity1"
                                                                value="1" readonly />
                                                            <span class="quantity-btn"
                                                                onclick="incrementQuantity('quantity1')"><i
                                                                    class="fi-rr-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Single Quantity Widget -->
                                            <div class="product-d-info-quantity">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    <div class="product-d-info-quantity-left">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios2" value="option2" />

                                                        <p>Stripe</p>
                                                    </div>
                                                    <div class="product-d-info-quantity-right">
                                                        <div class="product-d-info-quantity-increment-decrement">
                                                            <span class="quantity-btn"
                                                                onclick="decrementQuantity('quantity2')"><i
                                                                    class="fi-rr-minus"></i></span>
                                                            <input type="text" class="quantity-input" id="quantity2"
                                                                value="1" readonly />
                                                            <span class="quantity-btn"
                                                                onclick="incrementQuantity('quantity2')"><i
                                                                    class="fi-rr-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Single Quantity Widget -->
                                            <div class="product-d-info-quantity">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    <div class="product-d-info-quantity-left">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios3" value="option3" />

                                                        <p>Box</p>
                                                    </div>
                                                    <div class="product-d-info-quantity-right">
                                                        <div class="product-d-info-quantity-increment-decrement">
                                                            <span class="quantity-btn"
                                                                onclick="decrementQuantity('quantity3')"><i
                                                                    class="fi-rr-minus"></i></span>
                                                            <input type="text" class="quantity-input" id="quantity3"
                                                                value="1" readonly />
                                                            <span class="quantity-btn"
                                                                onclick="incrementQuantity('quantity3')"><i
                                                                    class="fi-rr-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        @endif

                                    </div>

                                    @if($variants && count($variants) > 0)
                                    <div class="product-d-total-widget">
                                        <p>Total amount</p>
                                        <strong>200 BDT<span>(20 piece)</span></strong>
                                    </div>
                                    @endif

                                    <div class="product-d-info-btn">
                                        <div class="product-d-info-single-btn">
                                            <button type="button" class="primary__btn add-to-cart">
                                                <i class="fi-rr-shopping-bag-add"></i>Add to cart
                                            </button>
                                        </div>
                                        <div class="product-d-info-single-btn">
                                            <a href="index.html" class="primary__btn buy-now-btn">
                                                <i class="fi-rr-shopping-bag"></i>Buy now
                                            </a>
                                        </div>
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
    @if(count($mayLikedProducts) > 0)
        @include('product_details.you_may_like')
    @endif
@endsection
