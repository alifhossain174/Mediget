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
                            <div class="disease-wise-card-img">
                                <img src="{{env('ADMIN_URL').'/'.$disease->image}}" alt="" />
                            </div>
                            <div class="disease-wise-card-info">
                                <h4>{{$disease->name}}</h4>
                            </div>
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
