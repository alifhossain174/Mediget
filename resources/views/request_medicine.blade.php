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
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25">
                            Request for medicine
                        </h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>Request for medicine</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Medicine Request Area -->
    <section class="medicine-request-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-5 col-md-8 col-12">
                    <form action="#" method="post" class="request-medicine-form">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" required />
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="phone" required />
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" required />
                        </div>
                        <div id="medicineContainer">
                            <div class="request__medicine--data-group">
                                <div class="form-group">
                                    <label>Medicine name</label>
                                    <input type="text" name="address" required="" />
                                </div>
                                <div class="form-group">
                                    <label>Qty</label>
                                    <div class="quantity__box minicart__quantity">
                                        <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                            value="Decrease Value">
                                            -
                                        </button>
                                        <div>
                                            <input type="number" class="quantity__number" value="1" data-counter="" />
                                        </div>
                                        <button type="button" class="quantity__value increase" value="Increase Value">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="addMoreBtn">
                            Add More<i class="fi fi-rr-plus"></i>
                        </button>
                        <div class="request__medicine--sidebar-btn">
                            <button type="submit" class="primary__btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Medicine Request Area -->

    @include('mobile_app')
@endsection
