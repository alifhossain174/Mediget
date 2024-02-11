@extends('master')

@section('content')
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25">
                            Upload Prescription
                        </h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>Upload Prescription</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Upload Prescription section -->
    <section class="upload-prescription-area" style="background-image: url('{{url('assets')}}/img/upload-prescription-form-img.png');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-5 col-md-8 col-12">
                    <div class="upload-prescription-content">
                        <form class="upload-prescription-form" action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Patient name</label><input type="text" name="full-name" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Phone number</label><input type="tel" name="number" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Delivery address</label><input type="text" name="delivery-address"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-img-input">
                                        <div class="library-photo-input">
                                            <input type="file" accept="image*,.pdf*" id="library-photo-input"
                                                class="hidden" onchange="uploadLibraryPhoto()" />
                                            <label for="library-photo-input">
                                                <i class="fi-rr-plus"></i>
                                                <span>Choose file</span>
                                                <p>Supported file: .png, .jpg and .pdf</p>
                                            </label>
                                        </div>
                                        <div class="remove-icon-main" style="position: relative">
                                            <div class="remove-icon" id="remove-icon" style="display: none"
                                                onclick="removeImage()">
                                                <i class="fi fi-rr-cross"></i>
                                            </div>
                                            <img id="uploaded-image" style="display: none" src="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-prescription-cont-btn">
                                        <button type="submit" class="primary__btn">
                                            Submit prescription
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Upload Prescription section -->

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
