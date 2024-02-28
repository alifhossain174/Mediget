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
                        <h1 class="breadcrumb__content--title mb-25">Doctor details</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>Doctor details</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Doctor Details Area -->
    <section class="doctor-details-area section--padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="doctor-details-widget">
                        <div class="doctor-details-card">
                            <div class="doctor-details-card-img">
                                <img class="lazy" data-src="{{url(env('ADMIN_URL').'/'.$data->image)}}" src="{{url('assets')}}/img/product-load.gif" alt="" />
                            </div>
                            <div class="doctor-details-card-info">
                                <h4>{{$data->name}}</h4>
                                <ul>
                                    @if($data->degree)
                                    <li><i class="icofont-pencil"></i> {{$data->degree}}</li>
                                    @endif

                                    @if($data->institution)
                                    <li><i class="icofont-hospital"></i> {{$data->institution}}</li>
                                    @endif

                                    @if($data->available_time)
                                    <li><i class="icofont-clock-time"></i>Available:<span> {{$data->available_time}}</span></li>
                                    @endif

                                    @if($data->contact)
                                    <li><i class="icofont-phone"></i>Appoinment:<span> {{$data->contact}}</span></li>
                                    @endif

                                    @if($data->location)
                                    <li><i class="icofont-location-pin"></i>Location:<span> {{$data->location}}</span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="doctor-details-bottom">

                            @if($data->biography)
                            <div class="doctor-d-content-widget">
                                <h3>Biography</h3>
                                <p>
                                    {{$data->biography}}
                                </p>
                            </div>
                            @endif

                            @if($data->education)
                            <div class="doctor-d-content-widget">
                                <h3>Education</h3>
                                <ul>
                                    @foreach (explode(",", $data->education) as $edu)
                                    <li>
                                        <i class="icofont-graduate"></i>{{$edu}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="appoinment-widget">
                        <div class="appoinment-widget-head">
                            <h4>Book a Visit</h4>
                            <p>{{$data->available_time}}</p>
                        </div>

                        @guest
                        <div class="appoinment-widget-image-wrapper">
                            <div class="appoinment-widget-image">
                                <img src="{{url('assets')}}/img/appointment.svg" alt="" />
                            </div>
                            <div class="appoinment-widget-img-wrapper-btn">
                                <a href="{{url('login')}}" class="primary__btn">Please signing to Book</a>
                            </div>
                        </div>
                        @endguest


                        <!-- When Click Top SignIn Button Then Go Signin Page. After Signin then redirect this page and show this widget -->
                        @auth
                        <form action="{{url('submit/doctor/visit/request')}}" method="post" class="appoinment-widget-inner">
                            @csrf
                            <input type="hidden" name="doctor_id" value="{{$data->id}}">
                            <div class="form-group">
                                <label>Patient name</label>
                                <input type="text" name="name" required />
                            </div>
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="tel" name="phone" required />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" name="age" required />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input type="text" name="weight" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Visit date & time</label>
                                <input name="date" name="visit_date_time" type="text" placeholder="Date &amp; Time" required="required"
                                    class="datetimepicker" autocomplete="off" />
                                <i class="icofont-calendar"></i>
                            </div>
                            <!-- Appoinment Medicine List -->
                            <div class="appoinment-widget-list">
                                <label class="appoinment-medicine-item" for="flexCheckChecked1">
                                    <div class="appoinment-medicine-name">
                                        Visiting Charge
                                    </div>
                                    <span>৳ {{$data->visiting_charge}}</span>
                                </label>
                            </div>
                            <div class="appoinment-widget-button">
                                <button type="submit" class="primary__btn">Book Now</button>
                            </div>
                        </form>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Details Area -->
@endsection
