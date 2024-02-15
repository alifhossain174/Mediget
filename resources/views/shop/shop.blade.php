@extends('master')

@push('offcanvas_filter')
    <!-- Start offcanvas filter sidebar -->
    <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M368 368L144 144M368 144L144 368"></path>
            </svg>
            <span class="offcanvas__filter--close__text">Close</span>
        </button>
        <div class="offcanvas__filter--sidebar__inner">
            <div class="single__widget price__filter widget__bg">
                <h2 class="widget__title h3">Filter By Price</h2>
                <form class="price__filter--form" action="#">
                    <div class="price__filter--form__inner d-flex align-items-center">
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="fromPrice">From</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">৳</span>
                                <label>
                                    <input class="price__filter--input__field border-0" id="fromPrice" type="number"
                                        placeholder="0" min="0" max="250.00" />
                                </label>
                            </div>
                        </div>
                        <div class="price__divider">
                            <span>-</span>
                        </div>
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="toPrice">To</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">৳</span>
                                <label>
                                    <input class="price__filter--input__field border-0" id="toPrice" type="number"
                                        min="0" placeholder="250.00" max="250.00" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="price__filter--btn primary__btn" type="submit">
                        Filter
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End offcanvas filter sidebar -->
@endpush

@section('content')
    @include('shop.breadcrumb')

    <!-- Start shop section -->
    <section class="shop__section section--padding">
        <div class="container">
            <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">

                @include('shop.filter')

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product__section--inner style-2">

                        @include('single_product.product')

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shop section -->
@endsection

@section('footer_js')
    <script>
        function filterProducts() {

            // default filter values
            var category_slug = $("#filter_category_slug").val();
            var disease_slug = $("#filter_disease_slug").val();
            var flag_slug = $("#filter_flag_slug").val();
            var otc_status = $("#filter_otc_status").val();

            // fetching filter values
            var per_page = Number($("#filter_data_per_page").val());
            var sort_by = Number($("#filter_sort_by").val());
            var min_price = Number($("#filter_min_price").val());
            var max_price = Number($("#filter_max_price").val());



            // setting up get url with filter parameters
            var baseUrl = window.location.pathname;

            if(category_slug){
                baseUrl += '?category=' + category_slug;
            }
            if(disease_slug){
                baseUrl += '?disease=' + disease_slug;
                if(otc_status){
                    baseUrl += '&otc=1';
                }
            }
            if(flag_slug){
                baseUrl += '?flag=' + flag_slug;
            }


            if (per_page && per_page > 0) {
                baseUrl.includes('?') ? baseUrl += '&per_page=' + per_page : baseUrl += '?per_page=' + per_page;
            }
            if (sort_by && sort_by > 0) {
                baseUrl.includes('?') ? baseUrl += '&sort_by=' + sort_by : baseUrl += '?sort_by=' + sort_by;
            }
            if (min_price && min_price > 0) {
                baseUrl.includes('?') ? baseUrl += '&min_price=' + min_price : baseUrl += '?min_price=' + min_price;
            }
            if (max_price && max_price > 0) {
                baseUrl.includes('?') ? baseUrl += '&max_price=' + max_price : baseUrl += '?max_price=' + max_price;
            }

            history.pushState(null, null, baseUrl);


            // sending request
            var formData = new FormData();

            formData.append("category_slug", category_slug);
            formData.append("disease_slug", disease_slug);
            formData.append("flag_slug", flag_slug);
            formData.append("otc_status", otc_status);

            formData.append("per_page", per_page);
            formData.append("sort_by", sort_by);
            formData.append("min_price", min_price);
            formData.append("max_price", max_price);
            formData.append("path_name", baseUrl);


            $.ajax({
                data: formData,
                url: "{{ url('filter/products') }}",
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('.product__section--inner').fadeOut(function() {
                        $(this).html(data.rendered_view);
                        $(this).fadeIn();
                        renderLazyImage()
                    });
                    $(".product__showing--count").html(data.showingResults);
                },
                error: function(data) {
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1000;
                    toastr.error("Something Went Wrong");
                }
            });
        }
    </script>
@endsection
