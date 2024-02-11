@extends('master')

@push('offcanvas_filter')
    <!-- Start offcanvas filter sidebar -->
    <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M368 368L144 144M368 144L144 368"></path>
            </svg>
            <span class="offcanvas__filter--close__text">Close</span>
        </button>
        <div class="offcanvas__filter--sidebar__inner">
            <div class="single__widget price__filter widget__bg">
                <h2 class="widget__title h3">Filter By Price</h2>
                <form class="price__filter--form" action="#">
                    <div class="price__filter--form__inner d-flex align-items-center">
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="fromPrice">From</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">$</span>
                                <label>
                                    <input class="price__filter--input__field border-0" id="fromPrice" type="number"
                                        placeholder="0" min="0" max="250.00" />
                                </label>
                            </div>
                        </div>
                        <div class="price__divider">
                            <span>-</span>
                        </div>
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="toPrice">To</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">$</span>
                                <label>
                                    <input class="price__filter--input__field border-0" id="toPrice" type="number"
                                        min="0" placeholder="250.00" max="250.00" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="price__filter--btn primary__btn" type="submit">
                        Filter
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End offcanvas filter sidebar -->
@endpush

@section('content')

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25">Category Name</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>OTC Medicine</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start shop section -->
    <section class="shop__section section--padding">
        <div class="container">
            <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
                <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                    <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
                        <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                        <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                        <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                    </svg>
                    <span class="widget__filter--btn__text">Filter</span>
                </button>
                <div class="product__view--mode d-flex align-items-center">
                    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                        <label class="product__view--label">Prev Page :</label>
                        <div class="select shop__header--select">
                            <select class="product__view--select">
                                <option selected value="1">65</option>
                                <option value="2">40</option>
                                <option value="3">42</option>
                                <option value="4">57</option>
                                <option value="5">60</option>
                            </select>
                        </div>
                    </div>
                    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                        <label class="product__view--label">Sort By :</label>
                        <div class="select shop__header--select">
                            <select class="product__view--select">
                                <option selected value="1">Sort by latest</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by rating</option>
                            </select>
                        </div>
                    </div>
                    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                        <label class="product__view--label">Filter By Price:</label>
                        <form class="price__filter--form" action="#" method="post">
                            <div class="price__filter--form__inner d-flex align-items-center">
                                <div class="price__filter--group">
                                    <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                        <span class="price__filter--currency">$</span>
                                        <label>
                                            <input class="price__filter--input__field border-0" name="filter.v.price.gte"
                                                type="number" placeholder="0" min="0" max="250.00" />
                                        </label>
                                    </div>
                                </div>
                                <div class="price__divider">
                                    <span>-</span>
                                </div>
                                <div class="price__filter--group">
                                    <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                        <span class="price__filter--currency">$</span>
                                        <label>
                                            <input class="price__filter--input__field border-0" name="filter.v.price.lte"
                                                type="number" min="0" placeholder="250.00" max="250.00" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="price__filter--btn primary__btn" type="submit">
                                Filter
                            </button>
                        </form>
                    </div>
                </div>
                <p class="product__showing--count">Showing 1–9 of 21 results</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product__section--inner style-2">
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
            </div>
        </div>
    </section>
    <!-- End shop section -->
@endsection
