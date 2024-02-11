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
                    <div class="single-banner"
                        style="
              background-image: url('{{url('assets')}}/img/banner/banner-1.png');
            ">
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
                    <div class="single-banner"
                        style="
              background-image: url('./assets/img/banner/banner-2.png');
            ">
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

    <!-- Shop Category section -->
    <section class="shop-category-area section--padding">
        <div class="container">
            <div class="section__heading text-center mb-35">
                <h2 class="section__heading--maintitle">Shop By Category</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="shop-category-inner">
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>COVID Essentials</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Sexual Wellness</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Diabetes Care</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Womens Care</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Natural food</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Men's Products</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Surgical</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Laundry & Household</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Health & Beauty</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Family Nutation</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Herbal</h4>
                            </div>
                        </a>
                        <a href="{{url('category')}}/345UYT" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="https://placehold.co/88x88/EEE/31343C" alt="#" />
                            </div>
                            <div class="shop-category-title">
                                <h4>Devices & Equipment</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Category section -->

    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner"
                style="
          background-image: url('https://placehold.co/1320x360/EEE/31343C');
        ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Looking for medicine from abroad?</h3>
                            <a href="request-medicine.html" class="primary__btn request__medicine--btn"
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

    <!-- Start product section -->
    <section class="product__section section--padding">
        <div class="container">
            <div class="section__heading text-center mb-35">
                <h2 class="section__heading--maintitle">Prescription Medicines</h2>
            </div>
            <div class="product__section--inner">
                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor"></path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product__items">
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
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor">
                                                </path>
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="add__to--cart__text"> + Add to cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section__bottom-btn">
                <a href="#" class="primary__btn">Show more</a>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner"
                style="
          background-image: url('https://placehold.co/1320x360/EEE/31343C');
        ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Women’s Care</h3>
                            <a href="#" class="primary__btn">More women’s products<svg
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

    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner"
                style="
          background-image: url('https://placehold.co/1320x360/EEE/31343C');
        ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Skin’s Care</h3>
                            <a href="#" class="primary__btn">More skin’s products<svg
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

    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner"
                style="
          background-image: url('https://placehold.co/1320x360/EEE/31343C');
        ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Men’s Care</h3>
                            <a href="#" class="primary__btn">More men’s products<svg
                                    class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
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

    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner"
                style="
          background-image: url('https://placehold.co/1320x360/EEE/31343C');
        ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Devices & Equipment</h3>
                            <a href="#" class="primary__btn">More devices & equipment<svg
                                    class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
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

    <!-- CTA section -->
    <section class="category-cta-section">
        <div class="container">
            <div class="category-cta-inner"
                style="
          background-image: url('https://placehold.co/1320x360/EEE/31343C');
        ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="category-cta-content">
                            <h3>Personal Care Products</h3>
                            <a href="#" class="primary__btn">More personal care products<svg
                                    class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
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
    </section>
    <!-- CTA section -->

    <!-- Category Wise Product Area -->
    <section class="category-wise-product section--padding pb-0">
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
