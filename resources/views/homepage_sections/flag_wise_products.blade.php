@foreach ($flags as $flag)
    @if($flag->featured != 1)
        <!-- CTA section -->
        <section class="category-cta-section">
            <div class="container">
                <div class="category-cta-inner" style="background-image: url('{{env('ADMIN_URL').'/'.$flag->icon}}');">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="category-cta-content">
                                <h3>{{$flag->name}}</h3>
                                <a href="{{url('shop')}}?flag={{$flag->slug}}" class="primary__btn">
                                    More {{$flag->name}}
                                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA section -->

        <!-- Category Wise Product Area -->
        <section class="category-wise-product section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="category-wise-product-slider swiper">
                            <div class="swiper-wrapper">

                                @php
                                    $products = DB::table('products')
                                        ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                                        ->leftJoin('flags', 'products.flag_id', 'flags.id')
                                        ->select('products.id', 'products.slug', 'products.price', 'products.discount_price', 'products.name', 'products.stock', 'products.strength', 'products.image', 'medicine_types.name as medicine_type', 'flags.name as flag_name')
                                        ->where('products.flag_id', $flag->id)
                                        ->inRandomOrder()
                                        ->skip(0)
                                        ->limit(20)
                                        ->get();
                                @endphp

                                <!-- Single Card -->
                                @foreach ($products as $product)
                                <div class="swiper-slide">
                                    @include('single_product.product')
                                </div>
                                @endforeach


                            </div>
                            <div class="swiper__nav--btn swiper-button-next"></div>
                            <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Wise Product Area -->
    @endif
@endforeach
