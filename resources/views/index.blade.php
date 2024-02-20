@extends('master')


@push('site-seo')
    @php
        $generalInfo = DB::table('general_infos')->select('meta_title', 'meta_og_title', 'meta_keywords', 'meta_description', 'meta_og_description', 'meta_og_image', 'company_name', 'email', 'fav_icon')->where('id', 1)->first();
    @endphp

    <meta name="keywords" content="{{$generalInfo ? $generalInfo->meta_keywords : ''}}" />
    <meta name="description" content="{{$generalInfo ? $generalInfo->meta_description : ''}}" />
    <meta name="author" content="{{$generalInfo ? $generalInfo->company_name : ''}}" />
    <meta name="copyright" content="{{$generalInfo ? $generalInfo->company_name : ''}}">
    <meta name="url" content="{{env('APP_URL')}}">

    <title>@if($generalInfo && $generalInfo->meta_title) {{$generalInfo->meta_title}} @else {{$generalInfo->company_name}} @endif</title>
    @if($generalInfo && $generalInfo->fav_icon)<link rel="icon" href="{{env('ADMIN_URL')."/".($generalInfo->fav_icon)}}" type="image/x-icon"/>@endif

    <!-- Open Graph general (Facebook, Pinterest)-->
    <meta property="og:title" content="@if($generalInfo && $generalInfo->meta_og_title) {{$generalInfo->meta_og_title}} @else {{$generalInfo->company_name}} @endif"/>
    <meta property="og:type" content="Ecommerce"/>
    <meta property="og:url" content="{{env('APP_URL')}}"/>
    <meta property="og:image" content="{{env('ADMIN_URL')."/".($generalInfo->meta_og_image)}}"/>
    <meta property="og:site_name" content="{{$generalInfo ? $generalInfo->company_name : ''}}"/>
    <meta property="og:description" content="{{$generalInfo->meta_og_description}}"/>
    <!-- End Open Graph general (Facebook, Pinterest)-->
@endpush


@section('content')

    @include('homepage_sections.sliders')
    @include('homepage_sections.services')

    <!-- Start banner section -->
    <section class="banner__section section--padding pt-0">
        <div class="container">
            <div class="row">
                @if(isset($prescriptionService) && $prescriptionService->status == 1)
                <div class="col">
                    <div class="single-banner" style="@if($prescriptionService->banner) background-image: url('{{env('Admin_URL').'/'.$prescriptionService->banner}}'); @else background-image: url('{{url('assets')}}/img/banner/banner-1.png'); @endif">
                        <div class="banner-content">
                            <h3>{{$prescriptionService->title}}</h3>
                            <a href="{{url('upload/prescription')}}" class="primary__btn">{{$prescriptionService->button_text}}
                                <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                <div class="col">
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

    @include('homepage_sections.diseases')
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
    @include('mobile_app')
@endsection
