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
                                <img src="https://placehold.co/280x280/EEE/31343C" alt="" />
                            </div>
                            <div class="doctor-details-card-info">
                                <h4>Dr. Khalid Abbed</h4>
                                <ul>
                                    <li><i class="icofont-pencil"></i>MBBS, BCS(Helth)</li>
                                    <li>
                                        <i class="icofont-hospital"></i>Square Hospital
                                        (Professor Neuromedicine)
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i>Available:<span>03:03 PM - 04:04 PM</span>
                                    </li>
                                    <li>
                                        <i class="icofont-phone"></i>Appoinment:
                                        <span>15454454524</span>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>Location:
                                        <span>Los Angeles - New York</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="doctor-details-bottom">
                            <div class="doctor-d-content-widget">
                                <h3>Biography</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo viverra maecenas accumsan lacus vel
                                    facilisis.Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                                <p>
                                    Risus commodo viverra maecenas accumsan lacus vel
                                    facilisis.Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                            <div class="doctor-d-content-widget">
                                <h3>Education</h3>
                                <ul>
                                    <li>
                                        <i class="icofont-graduate"></i>PHD degree in Neorology
                                        at University of Mediserv <span>(2006)</span>
                                    </li>
                                    <li>
                                        <i class="icofont-graduate"></i>Master of Neoro Surgery
                                        at University of Mediserv <span>(2002)</span>
                                    </li>
                                    <li>
                                        <i class="icofont-graduate"></i>MBBS degree in
                                        Neurosciences at University of Mediserv
                                        <span>(2002)</span>
                                    </li>
                                    <li>
                                        <i class="icofont-graduate"></i>Higher Secondary
                                        Certificate at Mediserv collage <span>(1991)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="appoinment-widget">
                        <div class="appoinment-widget-head">
                            <h4>Book a Visit</h4>
                            <p>Monday to Friday 09.00am-06.00pm</p>
                        </div>
                        <!-- Firslty Show this widget -->
                        <!-- <div class="appoinment-widget-image-wrapper">
                      <div class="appoinment-widget-image">
                        <img src="./assets/img/appointment.svg" alt="#" />
                      </div>
                      <div class="appoinment-widget-img-wrapper-btn">
                        <a href="#" class="primary__btn">Please signin to Book</a>
                      </div>
                    </div> -->
                        <!-- When Click Top SignIn Button Then Go Signin Page. After Signin then redirect this page and show this widget -->
                        <form action="#" method="post" class="appoinment-widget-inner">
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
                                <input name="date" type="text" placeholder="Date &amp; Time" required="required"
                                    class="datetimepicker" autocomplete="off" />
                                <i class="icofont-calendar"></i>
                            </div>
                            <!-- Appoinment Medicine List -->
                            <div class="appoinment-widget-list">
                                <label class="appoinment-medicine-item" for="flexCheckChecked1">
                                    <div class="appoinment-medicine-name">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked1" checked />
                                        Back pain visit
                                    </div>
                                    <span>200</span>
                                </label>
                                <label class="appoinment-medicine-item" for="flexCheckChecked2">
                                    <div class="appoinment-medicine-name">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked2" />
                                        Back pain visit
                                    </div>
                                    <span>400</span>
                                </label>
                                <label class="appoinment-medicine-item" for="flexCheckChecked3">
                                    <div class="appoinment-medicine-name">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked3" />
                                        Back pain visit
                                    </div>
                                    <span>500</span>
                                </label>
                            </div>
                            <div class="appoinment-widget-button">
                                <button type="submit" class="primary__btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Details Area -->
@endsection
