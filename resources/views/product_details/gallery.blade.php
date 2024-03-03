<div class="col-lg-6 col-12">
    <div class="product__details--media">
        <div class="product__media--preview swiper">
            <div class="swiper-wrapper">

                @if($variants && count($variants) > 0)
                    @foreach ($variants as $variant)
                        @if($variant->image)
                            <div class="swiper-slide">
                                <div class="product__media--preview__items zoom zoomSingleImage">
                                    <img class="product__media--preview__items--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL')."/productImages/".$variant->image}}" alt="" />
                                </div>
                            </div>
                        @endif
                    @endforeach
                @elseif ($productMultipleImages && count($productMultipleImages) > 0)
                    @foreach ($productMultipleImages as $image)
                        <div class="swiper-slide">
                            <div class="product__media--preview__items zoom zoomSingleImage">
                                <img class="product__media--preview__items--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL')."/productImages/".$image->image}}" alt="" />
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="swiper-slide">
                    <div class="product__media--preview__items zoom zoomSingleImage">
                        <img class="product__media--preview__items--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL')."/".$product->image}}" alt="" />
                    </div>
                </div>
                @endif

            </div>
        </div>
        <div id="magnify-container"></div>
        <!-- Slider Thumbs -->
        <div class="product__media--nav swiper">
            <div class="swiper-wrapper">

                @if($variants && count($variants) > 0)
                    @foreach ($variants as $variant)
                        @if($variant->image)
                        <div class="swiper-slide">
                            <div class="product__media--nav__items">
                                <img class="product__media--nav__items--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL')."/productImages/".$variant->image}}" alt="" />
                            </div>
                        </div>
                        @endif
                    @endforeach
                @elseif ($productMultipleImages && count($productMultipleImages) > 0)
                    @foreach ($productMultipleImages as $image)
                    <div class="swiper-slide">
                        <div class="product__media--nav__items">
                            <img class="product__media--nav__items--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL')."/productImages/".$image->image}}" alt="" />
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <div class="product__media--nav__items">
                            <img class="product__media--nav__items--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL')."/".$product->image}}" alt="" />
                        </div>
                    </div>
                @endif

            </div>
            <div class="swiper__nav--btn swiper-button-next"></div>
            <div class="swiper__nav--btn swiper-button-prev"></div>
        </div>
    </div>
</div>
