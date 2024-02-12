@extends('master')

@push('offcanvas_filter')
    <!-- Start offcanvas filter sidebar -->
    <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
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
                                <span class="price__filter--currency">$</span>
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
                                <span class="price__filter--currency">$</span>
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

                        @foreach ($products as $product)
                            @include('single_product.product')
                        @endforeach

                    </div>

                    <div class="pagination-wrapper pt-5 mt-3 text-center">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shop section -->
@endsection
