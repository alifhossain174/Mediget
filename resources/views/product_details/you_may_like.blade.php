<!-- Start product section -->
<section class="product__section product__section--style3 section--padding">
    <div class="container product3__section--container">
        <div class="section__heading text-center mb-50">
            <h2 class="section__heading--maintitle">You may also like</h2>
        </div>
        <div class="product__section--inner product__swiper--column4__activation swiper">
            <div class="swiper-wrapper">

                @foreach ($mayLikedProducts as $product)
                <div class="swiper-slide">
                    @include('single_product.product')
                </div>
                @endforeach

            </div>
            <div class="swiper__nav--btn swiper-button-next"></div>
            <div class="swiper__nav--btn swiper-button-prev"></div>
        </div>
    </div>
</section>
<!-- End product section -->
