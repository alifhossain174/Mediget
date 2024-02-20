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


@section('header_css')
    <link href="{{url('assets')}}/css/plugins/select2.min.css" rel="stylesheet" type="text/css" />
    <style>
        .select2-selection{
            height: 34px !important;
            border: 1px solid #ced4da !important;
        }
        .select2 {
            width: 100% !important;
        }

        .select2 .selection{
            width: 100%;
        }

        .select2-selection{
            height: 40px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 37px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow{
            top: 6px !important;
        }

        .select-style-2 .nice-select .list{
            max-height: 240px;
            overflow: scroll;
        }

        .select2-search__field:focus {
            border: 1px solid #aaa !important;
        }

        .select2-container--open .select2-dropdown{
            top: -7px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            border: 1px solid var(--primary-color);
            border-radius: 4px;
            padding: 5px 8px;
            background: var(--primary-color);
            cursor: pointer;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
            padding-left: 4px;
        }
    </style>
@endsection


@section('content')
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25">
                            Nursing service
                        </h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>Nursing service</span>
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
                    <form action="{{url('submit/nursing/request')}}" method="post" class="request-medicine-form" enctype="multipart/form-data">
                        @csrf
                        @honeypot
                        <div class="form-group">
                            <label>Choose Your Desired Service</label>
                            <select class="form-select" name="service_id" data-toggle="select2" required>
                                <option value="">Select One</option>
                                @foreach ($services as $service)
                                <option value="{{$service->id}}">{{$service->name}} <span> - {{$service->price}}</span></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" style="position: relative">
                            <label>Date & time</label>
                            <input type="text" id="service_date_time" name="service_date_time" placeholder="Date & Time" required="required" class="datetimepicker" autocomplete="off" required/>
                            <i class="icofont-calendar" style="position: absolute; right: 18px; top: 41px; font-size: 18px;"></i>
                        </div>
                        <div class="form-group">
                            <label>Patient name</label>
                            <input type="text" name="patient_name" value="{{Auth::user()->name}}" required />
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="patient_phone" value="{{Auth::user()->phone}}" required />
                        </div>
                        <div class="form-group">
                            <label>Remarks</label>
                            <textarea name="remarks"></textarea>
                        </div>

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


@section('footer_js')
    <script src="{{url('assets')}}/js/plugins/select2.min.js"></script>
    <script>
        $('[data-toggle="select2"]').select2();
    </script>
@endsection

