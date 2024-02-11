@extends('master')

@section('content')
    <!-- Start breadcrumb section -->
    <div class="product-details-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="product-d-breadcrumbs-menu">
                        <li>
                            <a href="{{url('/')}}">Home</a><i class="fi-rr-angle-right"></i>
                        </li>
                        <li>
                            <a href="category.html">Category</a><i class="fi-rr-angle-right"></i>
                        </li>
                        <li class="active">
                            <a href="product-details.html">Product name here</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9 col-md-10 col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="product__details--media">
                                <div class="product__media--preview swiper">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider -->
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <img class="product__media--preview__items--img"
                                                    src="https://placehold.co/580x630/EEE/31343C" alt="product-media-img" />
                                            </div>
                                        </div>
                                        <!-- Single Slider -->
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <img class="product__media--preview__items--img"
                                                    src="https://placehold.co/580x630/EEE/31343C" alt="product-media-img" />
                                            </div>
                                        </div>
                                        <!-- Single Slider -->
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <img class="product__media--preview__items--img"
                                                    src="https://placehold.co/580x630/EEE/31343C" alt="product-media-img" />
                                            </div>
                                        </div>
                                        <!-- Single Slider -->
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <img class="product__media--preview__items--img"
                                                    src="https://placehold.co/580x630/EEE/31343C" alt="product-media-img" />
                                            </div>
                                        </div>
                                        <!-- Single Slider -->
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <img class="product__media--preview__items--img"
                                                    src="https://placehold.co/580x630/EEE/31343C" alt="product-media-img" />
                                            </div>
                                        </div>
                                        <!-- Single Slider -->
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <img class="product__media--preview__items--img"
                                                    src="https://placehold.co/580x630/EEE/31343C" alt="product-media-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="magnify-container"></div>
                                <!-- Slider Thumbs -->
                                <div class="product__media--nav swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="https://placehold.co/98x98/EEE/31343C" alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="https://placehold.co/98x98/EEE/31343C" alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="https://placehold.co/98x98/EEE/31343C" alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="https://placehold.co/98x98/EEE/31343C" alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="https://placehold.co/98x98/EEE/31343C" alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="https://placehold.co/98x98/EEE/31343C" alt="product-nav-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper__nav--btn swiper-button-next"></div>
                                    <div class="swiper__nav--btn swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <!-- Product Details Info -->
                            <div class="product__details--info">
                                <h3 class="product-details-title">
                                    This is medicine title name - 400mg
                                </h3>
                                <p class="product-details-ctaegory">
                                    Category:<span>OTC medicine, Regular medicine</span>
                                </p>
                                <div class="product-d-info-group">
                                    <div class="product-d-info-single">
                                        <p>Product SKU:<span>250F536</span></p>
                                    </div>
                                    <div class="product-d-info-single">
                                        <p>Status:<span>Stock in</span></p>
                                    </div>
                                    <div class="product-d-info-single points">
                                        <p>+<span>5 points</span></p>
                                    </div>
                                </div>
                                <!-- Product Info Main -->
                                <div class="product-d-info-main">
                                    <div class="product-d-info-main-inner">
                                        <div class="product-d-info-main-top">
                                            <div class="product-d-info-main-price">
                                                <p>Best Price<span>5% OFF</span></p>
                                                <div class="product-d-info-main-price-group">
                                                    <strong>10.5 BDT</strong>
                                                    <del>12.00 BDT</del>
                                                </div>
                                            </div>
                                            <div class="product-d-info-wishlist-btn">
                                                <button type="button">
                                                    <i class="fi-rr-heart"></i>Wishlist
                                                </button>
                                            </div>
                                        </div>
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
                                    </div>
                                    <div class="product-d-total-widget">
                                        <p>Total amount</p>
                                        <strong>200 BDT<span>(20 piece)</span></strong>
                                    </div>
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

    <!-- Product Delivery Info Area -->
    <section class="product-delivery-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-delivery-info-inner">
                        <!-- Single Delivery Info -->
                        <div class="p-delivery-info-single">
                            <div class="p-delivery-info-icon">
                                <img src="./assets/img/icons/medical.svg" alt="#" />
                            </div>
                            <div class="p-delivery-info-content">
                                <p>Medicine company:</p>
                                <h4>Healthcare Pharmaceuticals Limited</h4>
                            </div>
                        </div>
                        <!-- Single Delivery Info -->
                        <div class="p-delivery-info-single">
                            <div class="p-delivery-info-icon">
                                <img src="./assets/img/icons/delivery-boy.svg" alt="#" />
                            </div>
                            <div class="p-delivery-info-content">
                                <p>Delivery charge</p>
                                <h4>60 BDT (In Dhaka)</h4>
                            </div>
                        </div>
                        <!-- Single Delivery Info -->
                        <div class="p-delivery-info-single">
                            <div class="p-delivery-info-icon">
                                <img src="./assets/img/icons/delivery-boy.svg" alt="#" />
                            </div>
                            <div class="p-delivery-info-content">
                                <p>Delivery charge</p>
                                <h4>120 BDT (Outside Dhaka)</h4>
                            </div>
                        </div>
                        <!-- Single Delivery Info -->
                        <div class="p-delivery-info-single">
                            <div class="p-delivery-info-icon">
                                <img src="./assets/img/icons/truck.svg" alt="#" />
                            </div>
                            <div class="p-delivery-info-content">
                                <h4>Express Delivery in Dhaka Intercity</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Delivery Info Area -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">
                            Product description
                        </li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">
                            Additional info
                        </li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#information">
                            Product review
                        </li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#custom">
                            Product manual
                        </li>
                    </ul>
                    <div class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10">
                                            Nam provident sequi
                                        </h2>
                                        <p class="product__tab--content__desc">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Nam provident sequi, nemo sapiente culpa nostrum
                                            rem eum perferendis quibusdam, magnam a vitae
                                            corporis! Magnam enim modi, illo harum suscipit
                                            tempore aut dolore doloribus deserunt voluptatum
                                            illum, est porro? Ducimus dolore accusamus impedit
                                            ipsum maiores, ea iusto temporibus numquam eaque
                                            mollitia fugiat laborum dolor tempora eligendi
                                            voluptatem quis necessitatibus nam ab?
                                        </p>
                                    </div>
                                    <div class="product__tab--content__step">
                                        <h4 class="product__tab--content__title mb-10">
                                            More Details
                                        </h4>
                                        <ul>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                    viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="48"
                                                        d="M268 112l144 144-144 144M392 256H100"></path>
                                                </svg>
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Laboriosam, dolorum?
                                            </li>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                    viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="48"
                                                        d="M268 112l144 144-144 144M392 256H100"></path>
                                                </svg>
                                                Magnam enim modi, illo harum suscipit tempore aut
                                                dolore?
                                            </li>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                    viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="48"
                                                        d="M268 112l144 144-144 144M392 256H100"></path>
                                                </svg>
                                                Numquam eaque mollitia fugiat laborum dolor tempora;
                                            </li>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                    viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="48"
                                                        d="M268 112l144 144-144 144M392 256H100"></path>
                                                </svg>
                                                Sit amet consectetur adipisicing elit. Quo delectus
                                                repellat facere maiores.
                                            </li>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                    viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="48"
                                                        d="M268 112l144 144-144 144M392 256H100"></path>
                                                </svg>
                                                Repellendus itaque sit quia consequuntur, unde
                                                veritatis. dolorum?
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="reviews" class="tab_pane">
                                <div class="product__tab--conten">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10">
                                            Nam provident sequi
                                        </h2>
                                        <p class="product__tab--content__desc">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Nam provident sequi, nemo sapiente culpa nostrum
                                            rem eum perferendis quibusdam, magnam a vitae
                                            corporis! Magnam enim modi, illo harum suscipit
                                            tempore aut dolore doloribus deserunt voluptatum
                                            illum, est porro? Ducimus dolore accusamus impedit
                                            ipsum maiores, ea iusto temporibus numquam eaque
                                            mollitia fugiat laborum dolor tempora eligendi
                                            voluptatem quis necessitatibus nam ab?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="information" class="tab_pane">
                                <div class="product__reviews">
                                    <div class="product__reviews--header">
                                        <h2 class="product__reviews--header__title h3 mb-20">
                                            Customer Reviews
                                        </h2>
                                        <div class="reviews__ratting d-flex align-items-center">
                                            <ul class="rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="reviews__summary--caption">Based on 2 reviews</span>
                                        </div>
                                        <a class="actions__newreviews--btn primary__btn" href="#writereview">Write A
                                            Review</a>
                                    </div>
                                    <div class="reviews__comment--area">
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumb">
                                                <img src="assets/img/other/comment-thumb1.png" alt="comment-thumb" />
                                            </div>
                                            <div class="reviews__comment--content">
                                                <div class="reviews__comment--top d-flex justify-content-between">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title h4">
                                                            Richard Smith
                                                        </h3>
                                                        <ul class="rating reviews__comment--rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="reviews__comment--content__date">February 18, 2022</span>
                                                </div>
                                                <p class="reviews__comment--content__desc">
                                                    Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Eos ex repellat officiis neque.
                                                    Veniam, rem nesciunt. Assumenda distinctio, autem
                                                    error repellat eveniet ratione dolor facilis
                                                    accusantium amet pariatur, non eius!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reviews__comment--list margin__left d-flex">
                                            <div class="reviews__comment--thumb">
                                                <img src="assets/img/other/comment-thumb2.png" alt="comment-thumb" />
                                            </div>
                                            <div class="reviews__comment--content">
                                                <div class="reviews__comment--top d-flex justify-content-between">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title h4">
                                                            Laura Johnson
                                                        </h3>
                                                        <ul class="rating reviews__comment--rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="reviews__comment--content__date">February 18, 2022</span>
                                                </div>
                                                <p class="reviews__comment--content__desc">
                                                    Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Eos ex repellat officiis neque.
                                                    Veniam, rem nesciunt. Assumenda distinctio, autem
                                                    error repellat eveniet ratione dolor facilis
                                                    accusantium amet pariatur, non eius!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumb">
                                                <img src="assets/img/other/comment-thumb3.png" alt="comment-thumb" />
                                            </div>
                                            <div class="reviews__comment--content">
                                                <div class="reviews__comment--top d-flex justify-content-between">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title h4">
                                                            John Deo
                                                        </h3>
                                                        <ul class="rating reviews__comment--rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="reviews__comment--content__date">February 18, 2022</span>
                                                </div>
                                                <p class="reviews__comment--content__desc">
                                                    Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Eos ex repellat officiis neque.
                                                    Veniam, rem nesciunt. Assumenda distinctio, autem
                                                    error repellat eveniet ratione dolor facilis
                                                    accusantium amet pariatur, non eius!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="writereview" class="reviews__comment--reply__area">
                                        <form action="#">
                                            <h3 class="reviews__comment--reply__title mb-15">
                                                Add a review
                                            </h3>
                                            <div class="reviews__ratting d-flex align-items-center mb-20">
                                                <ul class="rating d-flex">
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="14.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="14.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="14.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="14.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="14.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-10">
                                                    <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...."></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-15">
                                                    <label>
                                                        <input class="reviews__comment--reply__input"
                                                            placeholder="Your Name...." type="text" />
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-15">
                                                    <label>
                                                        <input class="reviews__comment--reply__input"
                                                            placeholder="Your Email...." type="email" />
                                                    </label>
                                                </div>
                                            </div>
                                            <button class="reviews__comment--btn text-white primary__btn"
                                                data-hover="Submit" type="submit">
                                                SUBMIT
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="custom" class="tab_pane">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10">
                                            Nam provident sequi
                                        </h2>
                                        <p class="product__tab--content__desc">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Nam provident sequi, nemo sapiente culpa nostrum
                                            rem eum perferendis quibusdam, magnam a vitae
                                            corporis! Magnam enim modi, illo harum suscipit
                                            tempore aut dolore doloribus deserunt voluptatum
                                            illum, est porro? Ducimus dolore accusamus impedit
                                            ipsum maiores, ea iusto temporibus numquam eaque
                                            mollitia fugiat laborum dolor tempora eligendi
                                            voluptatem quis necessitatibus nam ab?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->

    <!-- Start product section -->
    <section class="product__section product__section--style3 section--padding">
        <div class="container product3__section--container">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">You may also like</h2>
            </div>
            <div class="product__section--inner product__swiper--column4__activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
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
                                    <a href="product-details.html">Clopid 75</a>
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
                                            <span class="add__to--cart__text">
                                                + Add to cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End product section -->
@endsection
