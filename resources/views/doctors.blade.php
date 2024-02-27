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
                        <h1 class="breadcrumb__content--title mb-25">Doctor list</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>Doctor</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Doctor Area -->
    <section class="doctor-area section--padding">
        <div class="container">
            <div class="row">

                <!-- Single Doctor Card -->
                @foreach ($data as $item)
                <div class="col-lg-3 col-md-4 col-12">
                    <a href="{{url('doctor/details')}}/{{$item->slug}}" class="doctor-card">
                        <div class="doctor-card-img">
                            <img class="lazy" data-src="{{url(env('ADMIN_URL').'/'.$item->image)}}" src="{{url('assets')}}/img/product-load.gif" alt="" />
                            <div class="doctor-badge">
                                <span><i class="fi fi-ss-video-camera"></i>৳{{$item->visiting_charge}}</span>
                            </div>
                        </div>
                        <div class="doctor-card-info" style="min-height: 140px;">
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->degree}}</p>
                            <span> {{$item->institution}} </span>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 pt-5">
                    {{ $data->links() }}
                </div>
            </div>

        </div>
    </section>
    <!-- End Doctor Area -->
@endsection
