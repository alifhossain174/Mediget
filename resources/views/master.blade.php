<!DOCTYPE html>
<html lang="zxx">

@php
    $generalInfo = DB::table('general_infos')
        ->select('logo_dark', 'logo', 'fav_icon', 'company_name', 'email', 'address', 'tin', 'trade_license', 'custom_css', 'header_script', 'footer_script', 'payment_banner', 'play_store_link', 'contact', 'footer_copyright_text', 'app_store_link', 'whatsapp', 'messenger', 'telegram', 'youtube', 'facebook', 'twitter', 'linkedin', 'instagram', 'primary_color', 'secondary_color', 'tertiary_color', 'title_color', 'paragraph_color', 'border_color', 'google_tag_manager_status', 'google_tag_manager_id', 'google_analytic_status', 'google_analytic_tracking_id', 'fb_pixel_status', 'fb_pixel_app_id', 'tawk_chat_status', 'tawk_chat_link', 'messenger_chat_status', 'fb_page_id', 'short_description')
        ->where('id', 1)
        ->first();

    $categoriesForMenu = DB::table('categories')
        ->select('name', 'id', 'slug')
        ->where('status', 1)
        ->where('show_on_navbar', 1)
        ->orderBy('serial', 'asc')
        ->get();
@endphp

<head>

    <!-- Start Meta Data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- End Meta Data -->


    @stack('site-seo')


    <!-- ======= All CSS Plugins here ======== -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('assets')}}/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/maginific-popup.min.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/fancybox.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/glightbox.min.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/uicons.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/icofont.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/plugins/datepicker.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/style.css" />
    <link rel="stylesheet" href="{{url('assets')}}/css/toastr.min.css">

    @yield('header_css')

    <style>
        :root {
            --primary-color: {{ $generalInfo->primary_color }};
            --secondary-color: {{ $generalInfo->secondary_color }};
            --text-gray-color: {{ $generalInfo->paragraph_color }};
            --border-color: {{ $generalInfo->border_color }};
        }

        .toast {
            font-size: 14px;
        }

        a.product__items--action__btn.add__to--cart.removeFromCart{
            background: var(--alert-color);
        }

        /* default pagination start */
        li.page-item {
            padding-bottom: 10px
        }
        .page-link {
            font-size: 18px !important;
            padding: 8px 10px;
        }
        .active>.page-link,
        .page-link.active {
            color: white !important;
            background-color: {{ $generalInfo->secondary_color }} !important;
            border-color: {{ $generalInfo->secondary_color }} !important;
        }

        .page-link {
            color: {{ $generalInfo->secondary_color }} !important;
        }

        /* .product__items {
            border: 1px solid var(--border-color) !important;
            padding: 12px !important;
            border-radius: 4px !important;
        }

        @media only screen and (max-width: 479px) {
            .product__items {
                border: 1px solid var(--border-color) !important;
                padding: 6px !important;
                border-radius: 4px !important;
            }
        } */
        /* default pagination end */

        {!! $generalInfo->custom_css !!}
    </style>


    @if ($generalInfo->google_tag_manager_status)
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{ $generalInfo->google_tag_manager_id }}');
        </script>
        <!-- End Google Tag Manager-->
    @endif

    @if ($generalInfo->google_analytic_status)
        <!-- Google tag (gtag.js) google analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $generalInfo->google_analytic_tracking_id }}" type="53191a76ba85f8f784cbe351-text/javascript"></script>
        <script type="53191a76ba85f8f784cbe351-text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '{{$generalInfo->google_analytic_tracking_id}}');
        </script>
    @endif

    @if ($generalInfo->fb_pixel_status)
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ $generalInfo->fb_pixel_app_id }}');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id={{ $generalInfo->fb_pixel_app_id }}&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif

    @if ($generalInfo->tawk_chat_status)
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = '{{ $generalInfo->tawk_chat_link }}';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    @endif

    {!! $generalInfo->header_script !!}


</head>

<body>

    @if ($generalInfo->messenger_chat_status)
        <!-- Messenger Chat plugin Code -->
        <div id="fb-root"></div>

        <!-- Your Chat plugin code -->
        <div id="fb-customer-chat" class="fb-customerchat"></div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "{{ $generalInfo->fb_page_id }}");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v18.0'
                });
            };

            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    @endif

    @stack('offcanvas_filter')

    @stack('user_dashboard_menu')

    <!-- Start header area -->
    <header class="header__section">
        <div class="main__header header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="main__logo">
                        <h1 class="main__logo--title">
                            <a class="main__logo--link" href="{{url('/')}}">
                                <img class="main__logo--img" src="{{url(env('ADMIN_URL').'/'.$generalInfo->logo_dark)}}" alt="" />
                            </a>
                        </h1>
                    </div>
                    <div class="offcanvas__header--menu__open">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <form class="d-flex header__search--form" action="{{url('search/for/products')}}" method="GET">
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" id="search_keyword" @if(isset($keyword) && $keyword != '') value="{{$keyword}}" @endif name="search_keyword" placeholder="Search Medicine, Generic, Brand" type="text" />
                                </label>
                                <button class="header__search--button bg__secondary text-white" type="submit" aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                            <li class="header__account--items">
                                <a class="header__account--btn" href="{{url('track/order')}}">
                                    <i class="fi fi-rs-truck-side"></i>
                                    <span class="header__account--btn__text">Track your order</span>
                                </a>
                            </li>
                            <li class="header__account--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                    data-offcanvas>
                                    <div class="header__account--btn-icon">
                                        <i class="fi fi-rs-shopping-cart"></i>
                                        <span class="items__count wishlist">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                                    </div>
                                    <span class="header__account--btn__text">Cart items</span>
                                </a>
                            </li>

                            @auth
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="{{url('/home')}}">
                                    <div class="header__account--btn-icon">
                                        <i class="fi fi-rr-user"></i>
                                    </div>
                                    <span class="header__account--btn__text">My account</span>
                                </a>
                            </li>
                            @endauth

                            @guest
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="{{url('/login')}}">
                                    <div class="header__account--btn-icon">
                                        <i class="fi fi-rr-user"></i>
                                    </div>
                                    <span class="header__account--btn__text">Login/Register</span>
                                </a>
                            </li>
                            @endguest

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="{{url('/')}}">Home </a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="{{url('otc')}}">OTC medicines</a>
                                </li>

                                @foreach ($categoriesForMenu as $category)
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="{{ url('shop') }}?category={{$category->slug}}">{{$category->name}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="{{url('/')}}">
                        <img class="lazy" src="" data-src="{{url(env('ADMIN_URL').'/'.$generalInfo->logo_dark)}}" alt="" width="158" height="36" />
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{url('otc')}}">OTC medicines</a>
                        </li>

                        @foreach ($categoriesForMenu as $category)
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ url('shop') }}?category={{$category->slug}}">{{$category->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                    <div class="offcanvas__account--items">
                        <!-- Single Mobile Sidebar Item -->
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="{{url('track/order')}}">
                            <span class="offcanvas__account--items__icon">
                                <i class="fi fi-rs-truck-side"></i>
                            </span>
                            <span class="offcanvas__account--items__label">Track your order</span>
                        </a>
                        <!-- Single Mobile Sidebar Item -->
                        @auth
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="{{url('/home')}}">
                            <span class="offcanvas__account--items__icon">
                                <i class="fi fi-rr-user"></i>
                            </span>
                            <span class="offcanvas__account--items__label">My account</span>
                        </a>
                        @endauth

                        @guest
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="{{url('/login')}}">
                            <span class="offcanvas__account--items__icon">
                                <i class="fi fi-rr-user"></i>
                            </span>
                            <span class="offcanvas__account--items__label">Login/Register</span>
                        </a>
                        @endguest

                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start Offcanvas stikcy toolbar -->
        <div class="offcanvas__stikcy--toolbar">
            <ul class="d-flex justify-content-between">
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{url('/')}}">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                                viewBox="0 0 22 17">
                                <path fill="currentColor"
                                    d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z">
                                </path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Home</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{ url('shop') }}">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51"
                                height="17.443" viewBox="0 0 448 512">
                                <path
                                    d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z">
                                </path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)"
                        data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Search</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443"
                                viewBox="0 0 18.51 15.443">
                                <path
                                    d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                                    transform="translate(-62.393 -135.3)" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                        <span class="items__count">3</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="wishlist.html">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557"
                                viewBox="0 0 18.541 15.557">
                                <path
                                    d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                                    transform="translate(-62.498 -132.915)" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                        <span class="items__count">3</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Offcanvas stikcy toolbar -->

        <!-- Start offCanvas minicart -->
        <div class="offCanvas__minicart">
            @include('sidebar_cart')
        </div>
        <!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="{{url('search/for/products')}}" method="GET">
                    <label>
                        <input class="predictive__search--input" id="search_keyword" @if(isset($keyword) && $keyword != '') value="{{$keyword}}" @endif name="search_keyword" placeholder="Search Here" type="text" />
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit">
                        <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg>
                    </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        <!-- End serch box area -->
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">
        @yield('content')
    </main>

    <!-- Start footer section -->
    <footer class="footer__section bg__black">
        <div class="container">
            <div class="main__footer d-flex justify-content-between">
                <div class="footer__widget footer__widget--width">
                    <h2 class="footer__widget--title text-ofwhite h3">
                        About Us
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__widget--inner">
                        <p class="footer__widget--desc text-ofwhite mb-20" style="max-width: 380px;">
                            {{$generalInfo->short_description}}
                        </p>
                        <div class="footer-address" style="margin-top: 15px">
                            <h3>Office address:</h3>
                            <p style="max-width: 380px;">{{$generalInfo->address}}</p>
                        </div>

                        @if($generalInfo->trade_license || $generalInfo->tin)
                        <div class="footer-address" style="margin-top: 15px">
                            <h3>Others info:</h3>
                            <p>TIN:<span>{{$generalInfo->tin}}</span></p>
                            <p>Trade licence:<span>{{$generalInfo->trade_license}}</span></p>
                        </div>
                        @endif

                    </div>
                </div>

                <div class="footer__widget--menu__wrapper d-flex footer__widget--width">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title text-ofwhite h3">
                            Important Links
                            <button class="footer__widget--button" aria-label="footer widget button">
                                <svg class="footer__widget--title__arrowdown--icon"
                                    xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                    viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </button>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/about')}}">About us</a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/contact')}}">Contact us</a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/faq')}}">FAQ</a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/terms/of/services')}}">Terms of Services</a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/refund/policy')}}">Return & Refund Policy</a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/privacy/policy')}}">Privacy Policy</a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/shipping/policy')}}">Shipping Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__widget">
                        <h2 class="footer__widget--title text-ofwhite h3">
                            Categories
                            <button class="footer__widget--button" aria-label="footer widget button">
                                <svg class="footer__widget--title__arrowdown--icon"
                                    xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                    viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </button>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('otc')}}">OTC Medicines</a>
                            </li>

                            @foreach ($categoriesForMenu as $category)
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{ url('shop') }}?category={{$category->slug}}">{{$category->name}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="footer__widget footer__widget--width">
                    <h2 class="footer__widget--title text-ofwhite h3">
                        Contact
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__contact footer__widget--inner">
                        <div class="footer__contact--list">
                            <p>Offline contact:</p>
                            <ul>
                                @php
                                    $contactNumbers = '';
                                    foreach (explode(',', $generalInfo->contact) as $contact) {
                                        $contactNumbers .= "<li><a href='tel:+".$contact."'>" . $contact . '</a></li>';
                                    }
                                @endphp
                                {!! $contactNumbers !!}
                            </ul>
                        </div>

                        <div class="footer__contact--list" style="margin-top: 18px;">
                            <p>Email:</p>
                            <ul>
                                @php
                                    $contactEmails = '';
                                    foreach (explode(',', $generalInfo->email) as $email) {
                                        $contactEmails .= "<li><a href='mailto:+".$email."'>" . $email . '</a></li>';
                                    }
                                @endphp
                                {!! $contactEmails !!}
                            </ul>
                        </div>

                        @if($generalInfo->whatsapp || $generalInfo->messenger)
                        <div class="footer__social" style="margin-top: 18px;">
                            <h3 class="social__title text-ofwhite h4 mb-15">Live chat:</h3>
                            <ul class="social__shear">
                                @if($generalInfo->whatsapp)
                                <li class="social__shear--list">
                                    <a class="social__shear--list__icon" target="_blank" href="{{$generalInfo->whatsapp}}">
                                        <i class="icofont-whatsapp"></i>
                                        Chat with WhatsApp
                                    </a>
                                </li>
                                @endif

                                @if($generalInfo->messenger)
                                <li class="social__shear--list">
                                    <a class="social__shear--list__icon" target="_blank" href="{{$generalInfo->messenger}}">
                                        <i class="icofont-facebook-messenger"></i>
                                        Chat with Messenger
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="footer__widget footer__widget--width">
                    <h2 class="footer__widget--title text-ofwhite h3">
                        Newsletter
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__widget--inner">
                        <p class="footer__widget--desc text-ofwhite m-0">
                            Take advantage of our special offer. <br>
                            Don't worry, we will not spam you.
                        </p>
                        <div class="newsletter__subscribe">
                            <form class="newsletter__subscribe--form" action="{{ url('subscribe/for/newsletter') }}" method="POST">
                                @csrf
                                @honeypot
                                <label>
                                    <input class="newsletter__subscribe--input" name="email" placeholder="Email Address" type="email" />
                                </label>
                                <button class="newsletter__subscribe--button" type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__payment text-right">
                @if ($generalInfo && $generalInfo->payment_banner)
                <img class="display-block lazy" src="" data-src="{{ url(env('ADMIN_URL') . '/' . $generalInfo->payment_banner) }}" alt="payment-banner" />
                @endif
            </div>

            <div class="footer__bottom">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-12 text-center">
                        <p class="copyright__content text-ofwhite m-0">
                            {{ $generalInfo->footer_copyright_text }} Design & Developed by <a href="https://getup.com.bd" target="_blank" style="color: var(--secondary-color);">Getup Ltd</a>.
                        </p>
                    </div>
                    {{-- <div class="col-lg-6 col-12">
                        <div class="footer__payment text-right">
                            @if ($generalInfo && $generalInfo->payment_banner)
                            <img class="display-block lazy" src="" data-src="{{ url(env('ADMIN_URL') . '/' . $generalInfo->payment_banner) }}" alt="payment-banner" />
                            @endif
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg>
    </button>

    <!-- All Script JS Plugins here  -->
    <script src="{{url('assets')}}/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="{{url('assets')}}/js/vendor/popper.js" defer="defer"></script>
    <script src="{{url('assets')}}/js/plugins/jquery.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/jquery-migrate.js"></script>
    <script src="{{url('assets')}}/js/plugins/modernizer.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/wow.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/jquery.counterup.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/waypoints.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/nice-select.js"></script>
    <script src="{{url('assets')}}/js/plugins/jquery.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/glightbox.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/bootstrap-datepicker.js"></script>
    <script src="{{url('assets')}}/js/plugins/glightbox.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/magnific-popup.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{url('assets')}}/js/plugins/active.js"></script>

    <!-- Customscript js -->
    <script src="{{url('assets')}}/js/script.js"></script>


    {{-- for lazy load image --}}
    <script>
        function renderLazyImage() {
            var lazyloadImages;
            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop <script (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            renderLazyImage();
        })
    </script>

    {{-- cart related function --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function closeMiniCart() {
            $($('.offCanvas__minicart')[0]).removeClass('active');
            $('body').removeClass('offCanvas__minicart_active');
        }

        $('body').on('click', '.addToCart', function() {
            var id = $(this).data('id');
            $.get("{{ url('add/to/cart') }}" + '/' + id, function(data) {
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1000;
                toastr.success("Added to Cart");
                $(".offCanvas__minicart").html(data.rendered_cart);
                $("a.minicart__open--btn span.items__count").html(data.cartTotalQty);
            })

            $(this).html(
                "<i class='fi fi-rs-shopping-cart'></i> <span class='add__to--cart__text'> Remove</span>"
            );
            $(this).removeClass("addToCart");
            $(this).addClass("removeFromCart");
            $(this).blur();
        });

        $('body').on('click', '.removeFromCart', function() {
            var id = $(this).data('id');
            $.get("{{ url('remove/cart/item') }}" + '/' + id, function(data) {

                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1000;
                toastr.error("Removed from cart")
                $(".offCanvas__minicart").html(data.rendered_cart);
                $("a.minicart__open--btn span.items__count").html(data.cartTotalQty);
            })

            $(this).html("<i class='fi fi-rs-shopping-cart'></i> Add to cart</span>");
            $(this).removeClass("removeFromCart");
            $(this).addClass("addToCart");
            $(this).blur();
        });

        $('body').on('click', '.sidebar-product-remove', function() {
            var id = $(this).data('id');
            var cartItem = this.closest(".minicart__product--items");

            $.get("{{ url('remove/cart/item') }}" + '/' + id, function(data) {
                $(".offCanvas__minicart").html(data.rendered_cart);
                $("a.minicart__open--btn span.items__count").html(data.cartTotalQty)
                $(".product-d-info-btn").html(data.details_button);
                // cartSidebarQtyButtons();
                $("table.cart-single-product-table tbody").html(data.checkoutCartItems);
                $(".order-review-summary").html(data.checkoutTotalAmount);
            })

            $('.cart-' + id).html("<i class='fi fi-rs-shopping-cart'></i> Add to cart</span>");
            $('.cart-' + id).attr('data-id', id).removeClass("removeFromCart");
            $('.cart-' + id).attr('data-id', id).addClass("addToCart");
            $('.cart-' + id).blur();
        });


        $('body').on('click', '.quantity__value', function() {
            var id = $(this).data('id');
            var quantityInput = this.parentElement.querySelector("input");
            var currentQuantity = parseInt(quantityInput.value);

            if (this.classList.contains("decrease")) {
                quantityInput.value = Math.max(currentQuantity - 1, 1);
            } else if (this.classList.contains("increase")) {
                quantityInput.value = currentQuantity + 1;
            }

            // in product details page qty button
            // $("#product_details_cart_qty").val(quantityInput.value);

            var formData = new FormData();
            formData.append("cart_id", id);
            formData.append("cart_qty", quantityInput.value);
            $.ajax({
                data: formData,
                url: "{{ url('update/cart/qty') }}",
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    // updateCartTotal();
                    // cartSidebarQtyButtons();
                    $(".offCanvas__minicart").html(data.rendered_cart);
                    $("table.cart-single-product-table tbody").html(data.checkoutCartItems);
                    $(".order-review-summary").html(data.checkoutTotalAmount);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });

            // $("#quantity-number-" + id).html(quantityInput.value);
        });
    </script>


    @yield('footer_js')

    {!! $generalInfo->footer_script !!}

    <script src="{{ url('assets') }}/js/toastr.min.js"></script>
    {!! Toastr::message() !!}


</body>

</html>
