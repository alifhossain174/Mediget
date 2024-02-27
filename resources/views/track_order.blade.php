@extends('master')


@push('site-seo')
    @php
        $generalInfo = DB::table('general_infos')
            ->select('meta_title', 'meta_og_title', 'meta_keywords', 'meta_description', 'meta_og_description', 'meta_og_image', 'company_name', 'fav_icon')
            ->where('id', 1)
            ->first();
    @endphp

    <meta name="keywords" content="{{ $generalInfo ? $generalInfo->meta_keywords : '' }}" />
    <meta name="description" content="{{ $generalInfo ? $generalInfo->meta_description : '' }}" />
    <meta name="author" content="{{ $generalInfo ? $generalInfo->company_name : '' }}" />
    <meta name="copyright" content="{{ $generalInfo ? $generalInfo->company_name : '' }}">
    <meta name="url" content="{{ env('APP_URL') }}">

    <title>
        @if ($generalInfo && $generalInfo->meta_title)
            {{ $generalInfo->meta_title }}
        @else
            {{ $generalInfo->company_name }}
        @endif
    </title>
    @if ($generalInfo && $generalInfo->fav_icon)
        <link rel="icon" href="{{ env('ADMIN_URL') . '/' . $generalInfo->fav_icon }}" type="image/x-icon" />
    @endif

    <!-- Open Graph general (Facebook, Pinterest)-->
    <meta property="og:title" content="@if ($generalInfo && $generalInfo->meta_og_title) {{ $generalInfo->meta_og_title }} @else {{ $generalInfo->company_name }} @endif" />
    <meta property="og:type" content="Ecommerce" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:image" content="{{ env('ADMIN_URL') . '/' . $generalInfo->meta_og_image }}" />
    <meta property="og:site_name" content="{{ $generalInfo ? $generalInfo->company_name : '' }}" />
    <meta property="og:description" content="{{ $generalInfo->meta_og_description }}" />
    <!-- End Open Graph general (Facebook, Pinterest)-->
@endpush


@section('header_css')
    <style>
        input.order_no_input::placeholder {
            color: gray;
        }
    </style>
@endsection


@section('content')
    <div class="container justify-content-center align-items-center text-center">
        <div class="pt-5 pb-5 mt-5 mb-5">
            <div class="col-lg-8 col-xl-4 col-md-10  col-12 m-auto">
                <div style="margin: 16px;">
                    <h4 class="fs-1">Track Your Order</h4>
                    <p class="fw-light">with your Order Number for realtime update</p>
                </div>
                <form action="{{url('redirect/for/tracking')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="order_no_input" name="order_no" placeholder="1706318055217" style="border: 2px solid rgb(112, 112, 112); width: 50%; margin: 7px; padding: 7px; border-radius: 3px; background-color: rgb(245, 245, 245); text-align: center;" type="text">
                        <button type="submit" style="background: var(--primary-color); color: var(--white-color); border-style: none; padding: 8px 15px; font-weight: 600; border-radius: 2px;"><span>Track</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
