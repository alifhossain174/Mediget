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
                            Edit Uploaded Prescription
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
                        <form class="upload-prescription-form" action="{{url('update/my/prescription')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @honeypot
                            <input type="hidden" name="prescription_slug" value="{{$data->slug}}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Patient name</label><input type="text" value="{{$data->patient_name}}" name="patient_name" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Phone number</label><input type="text" value="{{$data->patient_phone}}" name="patient_phone" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Delivery address</label><input type="text" value="{{$data->address}}" name="address" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-img-input">
                                        <div class="library-photo-input">
                                            <input type="file" name="attachment" accept="image*,.pdf*" id="library-photo-input" class="hidden" onchange="uploadLibraryPhoto()" />
                                            <label for="library-photo-input">
                                                <i class="fi-rr-plus"></i>
                                                <span>Want to Upload New one or leave it</span>
                                                <p>Supported file: .png, .jpg and .pdf</p>
                                            </label>
                                        </div>
                                        <div class="remove-icon-main" style="position: relative">
                                            <div class="remove-icon" id="remove-icon" style="display: none" onclick="removeImage()">
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

    @include('mobile_app')
@endsection

@section('footer_js')
    <!-- Image Upload JS -->
    <script type="text/javascript">
        function uploadLibraryPhoto() {
          // Get the file that the user selected.
          const fileInput = document.getElementById("library-photo-input");
          const file = fileInput.files[0];

          // Check if a file was selected
          if (file) {
            // Create a new FileReader
            const reader = new FileReader();

            // Set up the onload event handler for the reader
            reader.onload = function () {
              // Get the element where you want to display the uploaded image.
              const imageElement = document.getElementById("uploaded-image");

              // Get the remove icon element
              const removeIcon = document.getElementById("remove-icon");

              // Set the source of the image element to the data URL from the FileReader.
              imageElement.src = reader.result;

              // Show the image element.
              imageElement.style.display = "block";

              // Show the remove icon.
              removeIcon.style.display = "block";
            };

            // Read the file as a data URL
            reader.readAsDataURL(file);
          }
        }

        function removeImage() {
            // Get the image element
            const imageElement = document.getElementById("uploaded-image");
            // Get the remove icon element
            const removeIcon = document.getElementById("remove-icon");
            // Hide the image element
            imageElement.style.display = "none";
            // Clear the source (removes the image)
            imageElement.src = "";
            // Hide the remove icon again
            removeIcon.style.display = "none";
            // Reset the file input
            const fileInput = document.getElementById("library-photo-input");
            fileInput.value = "";
        }
      </script>
@endsection
