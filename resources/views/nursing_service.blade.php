@extends('master')

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
                    <form action="#" method="post" class="request-medicine-form">
                        <div class="form-group">
                            <label>Services</label>
                            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                <option value="1">
                                    Dressing and Injection <span>200 BDT</span>
                                </option>
                                <option value="2">Injection <span>400 BDT</span></option>
                                <option value="3">Dressing <span>600 BDT</span></option>
                            </select>
                        </div>
                        <div class="form-group" style="position: relative">
                            <label>Date & time</label>
                            <input name="date" type="text" placeholder="Date &amp; Time" required="required"
                                class="datetimepicker" autocomplete="off" />
                            <i class="icofont-calendar"
                                style="
                      position: absolute;
                      right: 18px;
                      top: 41px;
                      font-size: 18px;
                    "></i>
                        </div>
                        <div class="form-group">
                            <label>Patient name</label>
                            <input type="text" name="patient-name" required />
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="phone" required />
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

    <!-- Download App section -->
    <section class="download-app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="download-app-inner">
                        <div class="download-app-img">
                            <img src="https://placehold.co/700x520/EEE/31343C" alt="#" />
                        </div>
                        <div class="download-app-content">
                            <h2>Download the mobile app</h2>
                            <p>
                                Order medicine from the mobile app. Enter your mobile number
                                to receive the app download link.
                            </p>
                            <form class="download-app-form" action="#" method="post">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="fi fi-rr-phone-call"></i>
                                    </div>
                                    <input type="tel" name="phone" placeholder="+8801234567890" required />
                                </div>
                                <div class="download-app-form-btn">
                                    <button type="submit">Send link</button>
                                </div>
                            </form>
                            <div class="download-app-links">
                                <a href="https://play.google.com/store/" target="_blank">
                                    <img src="{{url('assets')}}/img/icon/google-play.svg" alt="#" /></a>
                                <a href="https://www.apple.com/app-store/" target="_blank">
                                    <img src="{{url('assets')}}/img/icon/app-store.svg" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Download App section -->
@endsection
