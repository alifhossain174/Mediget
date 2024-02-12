<!-- Start slider section -->
<section class="hero__slider--section">
    <div class="hero__slider--inner hero__slider--activation swiper">
        <div class="hero__slider--wrapper swiper-wrapper">

            @foreach ($sliders as $slider)
            <div class="swiper-slide">
                <div class="hero__slider--items home1__slider--bg" style="background: url({{env('ADMIN_URL').'/'.$slider->image}});">
                    <div class="container">
                        <div class="hero__slider--items__inner">
                            <div class="row">
                                <div @if($slider->text_position == 'left') class="col-lg-6 col-md-8 col-12" @else class="col-lg-6 offset-lg-6 col-md-8 offset-md-4 col-12" @endif>
                                    <div class="slider__content">
                                        <p class="slider__content--desc desc1 mb-15">
                                            {{$slider->sub_title}}
                                        </p>
                                        <h2 class="slider__content--maintitle h1">
                                            {{$slider->title}}
                                        </h2>
                                        <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                            {{$slider->description}}
                                        </p>
                                        <a class="slider__btn primary__btn" href="{{$slider->btn_link}}">{{$slider->btn_text}}
                                            <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                    transform="translate(-4 -4)" fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div class="swiper__nav--btn swiper-button-next"></div>
        <div class="swiper__nav--btn swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- End slider section -->
