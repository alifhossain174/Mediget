@foreach ($flags as $flag)
    @if($flag->featured != 1)
        <!-- CTA section -->
        <section class="category-cta-section">
            <div class="container">
                <div class="category-cta-inner" style="background-image: url('https://placehold.co/1320x360/EEE/31343C');">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="category-cta-content">
                                <h3>{{$flag->name}}</h3>
                                <a href="{{url('flag')}}/{{$flag->slug}}" class="primary__btn">
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

                                <!-- Single Card -->
                                <div class="swiper-slide product__items">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="{{url('product/details')}}/234UY">
                                            <img class="product__items--img product__primary--img"
                                                src="https://placehold.co/282x310/EEE/31343C" alt="product-img" />
                                            <img class="product__items--img product__secondary--img"
                                                src="https://placehold.co/282x310/EEE/31343C" alt="product-img" />
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product__items--content">
                                        <span class="product__items--content__subtitle">Tablet</span>
                                        <h3 class="product__items--content__title h4">
                                            <a href="{{url('product/details')}}/234UY">Clopid 75</a>
                                        </h3>
                                        <div class="product__items--price">
                                            <span class="current__price">BDT 110</span>
                                            <span class="price__divided"></span>
                                            <span class="old__price">BDT 78</span>
                                        </div>
                                        <ul class="product__items--action d-flex">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                        viewBox="0 0 14.706 13.534">
                                                        <g transform="translate(0 0)">
                                                            <g>
                                                                <path data-name="Path 16787"
                                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                    transform="translate(0 -463.248)" fill="currentColor">
                                                                </path>
                                                                <path data-name="Path 16788"
                                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                    transform="translate(-1.191 -466.622)"
                                                                    fill="currentColor"></path>
                                                                <path data-name="Path 16789"
                                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                    transform="translate(-2.875 -466.622)"
                                                                    fill="currentColor"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="add__to--cart__text">
                                                        + Add to cart</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

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
