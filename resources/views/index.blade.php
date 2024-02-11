@extends('master')

@section('content')
    <!-- Start slider section -->
    <section class="hero__slider--section">
        <div class="hero__slider--inner hero__slider--activation swiper">
            <div class="hero__slider--wrapper swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero__slider--items home1__slider--bg">
                        <div class="container">
                            <div class="hero__slider--items__inner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-12">
                                        <div class="slider__content">
                                            <p class="slider__content--desc desc1 mb-15">
                                                Perfect Solutions for Your Mind
                                            </p>
                                            <h2 class="slider__content--maintitle h1">
                                                Your Gateway to Comprehensive Medical Insights
                                            </h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s
                                            </p>
                                            <a class="slider__btn primary__btn" href="#">Show More
                                                <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
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
                <div class="swiper-slide">
                    <div class="hero__slider--items home1__slider--bg two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-6 col-md-8 offset-md-4 col-12">
                                    <div class="hero__slider--items__inner">
                                        <div class="slider__content">
                                            <p class="slider__content--desc desc1 mb-15">
                                                Perfect Solutions for Your Mind
                                            </p>
                                            <h2 class="slider__content--maintitle h1">
                                                Explore a World of Medical Expertise and
                                                Personalized Care
                                            </h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s
                                            </p>
                                            <a class="primary__btn slider__btn" href="#">Show More
                                                <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
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
                <div class="swiper-slide">
                    <div class="hero__slider--items home1__slider--bg three">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="hero__slider--items__inner">
                                        <div class="slider__content">
                                            <p class="slider__content--desc desc1 mb-15">
                                                Perfect Solutions for Your Mind
                                            </p>
                                            <h2 class="slider__content--maintitle h1">
                                                Unparalleled Resources for Informed Decision-Making
                                            </h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s
                                            </p>
                                            <a class="primary__btn slider__btn" href="#">Show More
                                                <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
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
            </div>
            <div class="swiper__nav--btn swiper-button-next"></div>
            <div class="swiper__nav--btn swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End slider section -->


    <!-- Service section -->
    <section class="service-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-card-grid">
                        <!-- Single Service -->
                        <a href="{{url('nursing/service/request')}}" class="single-service-card">
                            <div class="service-card-img">
                                <img src="https://placehold.co/200x170/EEE/31343C" alt="#" />
                            </div>
                            <div class="single-service-content">
                                <h4>Nursing Service</h4>
                                <p>This is subtitle</p>
                            </div>
                        </a>
                        <!-- Single Service -->
                        <a href="{{url('doctors')}}" class="single-service-card">
                            <div class="service-card-img">
                                <img src="https://placehold.co/200x170/EEE/31343C" alt="#" />
                            </div>
                            <div class="single-service-content">
                                <h4>Doctor Appoinment</h4>
                                <p>This is subtitle</p>
                            </div>
                        </a>
                        <!-- Single Service -->
                        <a href="#" class="single-service-card">
                            <div class="service-card-img">
                                <img src="https://placehold.co/200x170/EEE/31343C" alt="#" />
                            </div>
                            <div class="single-service-content">
                                <h4>Ambulance Service</h4>
                                <p>This is subtitle</p>
                            </div>
                        </a>
                        <!-- Single Service -->
                        <a href="#" class="single-service-card">
                            <div class="service-card-img">
                                <img src="https://placehold.co/200x170/EEE/31343C" alt="#" />
                            </div>
                            <div class="single-service-content">
                                <h4>Pharmacist Service</h4>
                                <p>This is subtitle</p>
                            </div>
                        </a>
                        <!-- Single Service -->
                        <a href="#" class="single-service-card">
                            <div class="service-card-img">
                                <img src="https://placehold.co/200x170/EEE/31343C" alt="#" />
                            </div>
                            <div class="single-service-content">
                                <h4>Diagonistic Service</h4>
                                <p>This is subtitle</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service section -->


    <!-- Start banner section -->
    <section class="banner__section section--padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image: url('{{url('assets')}}/img/banner/banner-1.png');">
                        <div class="banner-content">
                            <h3>Upload your prescription</h3>
                            <a href="{{url('upload/prescription')}}" class="primary__btn">Upload prescription<svg
                                    class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2"
                                    height="12.2" viewBox="0 0 6.2 6.2">
                                    <path
                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image: url('./assets/img/banner/banner-2.png');">
                        <div class="banner-content">
                            <h3>Get Doctor Appoinment</h3>
                            <a href="{{url('doctors')}}" class="primary__btn">Get the appoinment<svg
                                    class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2"
                                    height="12.2" viewBox="0 0 6.2 6.2">
                                    <path
                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner section -->


    <!-- Disease Wise Medicine Area -->
    <section class="disease-wise-medicine section--padding pb-0">
        <div class="container">
            <div class="section__heading text-center mb-35">
                <h2 class="section__heading--maintitle">Disease wise medicine</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="disease-wise-slider swiper">
                        <div class="swiper-wrapper">
                            <!-- Single Card -->
                            <a href="{{url('disease/wise/medicine')}}/234UY" class="swiper-slide disease-wise-card">
                                <div class="disease-wise-card-img">
                                    <img src="https://placehold.co/320x240/EEE/31343C" alt="#" />
                                </div>
                                <div class="disease-wise-card-info">
                                    <h4>Disease name here</h4>
                                </div>
                            </a>
                            <!-- Single Card -->
                            <a href="{{url('disease/wise/medicine')}}/234UY" class="swiper-slide disease-wise-card">
                                <div class="disease-wise-card-img">
                                    <img src="https://placehold.co/320x240/EEE/31343C" alt="#" />
                                </div>
                                <div class="disease-wise-card-info">
                                    <h4>Disease name here</h4>
                                </div>
                            </a>
                            <!-- Single Card -->
                            <a href="{{url('disease/wise/medicine')}}/234UY" class="swiper-slide disease-wise-card">
                                <div class="disease-wise-card-img">
                                    <img src="https://placehold.co/320x240/EEE/31343C" alt="#" />
                                </div>
                                <div class="disease-wise-card-info">
                                    <h4>Disease name here</h4>
                                </div>
                            </a>
                            <!-- Single Card -->
                            <a href="{{url('disease/wise/medicine')}}/234UY" class="swiper-slide disease-wise-card">
                                <div class="disease-wise-card-img">
                                    <img src="https://placehold.co/320x240/EEE/31343C" alt="#" />
                                </div>
                                <div class="disease-wise-card-info">
                                    <h4>Disease name here</h4>
                                </div>
                            </a>
                            <!-- Single Card -->
                            <a href="{{url('disease/wise/medicine')}}/234UY" class="swiper-slide disease-wise-card">
                                <div class="disease-wise-card-img">
                                    <img src="https://placehold.co/320x240/EEE/31343C" alt="#" />
                                </div>
                                <div class="disease-wise-card-info">
                                    <h4>Disease name here</h4>
                                </div>
                            </a>
                        </div>
                        <div class="swiper__nav--btn swiper-button-next"></div>
                        <div class="swiper__nav--btn swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Disease Wise Medicine Area -->


    @include('homepage_sections.featured_category')


    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner" style="background-image: url('https://placehold.co/1320x360/EEE/31343C');">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Looking for medicine from abroad?</h3>
                            <a href="{{url('request/medicine')}}" class="primary__btn request__medicine--btn"
                                data-offcanvas="">Request for medicine<svg class="primary__btn--arrow__icon"
                                    xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2"
                                    viewBox="0 0 6.2 6.2">
                                    <path
                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA section -->


    @include('homepage_sections.featured_flag')
    @include('homepage_sections.flag_wise_products')



    <!-- Download App section -->
    <section class="download-app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="download-app-inner">
                        <div class="download-app-img">
                            <img src="https://placehold.co/700x520/EEE/31343C" alt="#" />
                        </div>
                        <div class="download-app-content">
                            <h2>Download the Mediget mobile app</h2>
                            <p>
                                Order medicine from the mobile app. Enter your mobile number
                                to receive the app download link.
                            </p>
                            <form class="download-app-form" action="#" method="post">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="fi fi-rr-phone-call"></i>
                                    </div>
                                    <input type="tel" name="phone" placeholder="+8801234567890" required />
                                </div>
                                <div class="download-app-form-btn">
                                    <button type="submit">Send link</button>
                                </div>
                            </form>
                            <div class="download-app-links">
                                <a href="https://play.google.com/store/" target="_blank">
                                    <img src="{{url('assets')}}/img/icon/google-play.svg" alt="#" />
                                </a>
                                <a href="https://www.apple.com/app-store/" target="_blank">
                                    <img src="{{url('assets')}}/img/icon/app-store.svg" alt="#" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Download App section -->
@endsection
