<!-- Disease Wise Medicine Area -->
<section class="disease-wise-medicine section--padding pb-0">
    <div class="container">
        <div class="section__heading text-center mb-35">
            <h2 class="section__heading--maintitle">Disease wise medicines</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="disease-wise-slider swiper">
                    <div class="swiper-wrapper">

                        <!-- Single Card -->
                        @foreach ($diseases as $disease)
                        <a href="{{url('shop')}}?disease={{$disease->slug}}" class="swiper-slide disease-wise-card">
                            @include('homepage_sections.disease_card')
                        </a>
                        @endforeach

                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Disease Wise Medicine Area -->
