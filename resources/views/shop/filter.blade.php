<button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
    <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
        <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
        <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
        <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
    </svg>
    <span class="widget__filter--btn__text">Filter</span>
</button>

<style>
    ::placeholder {
        color: #b7b7b7;
        opacity: 1;
    }

    ::-ms-input-placeholder {
        color: #b7b7b7;
    }
</style>


<input type="hidden" id="filter_category_slug" value="{{$category_slug}}">
<input type="hidden" id="filter_disease_slug" value="{{$disease_slug}}">
<input type="hidden" id="filter_flag_slug" value="{{$flag_slug}}">
<input type="hidden" id="filter_otc_status" value="{{$otc_status}}">


<div class="product__view--mode d-flex align-items-center">
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Show Items :</label>
        <div class="select shop__header--select">
            <select class="product__view--select" id="filter_data_per_page" onchange="filterProducts()">
                <option value="20" @if(isset($per_page) && $per_page == 20) selected @endif>20</option>
                <option value="40" @if(isset($per_page) && $per_page == 40) selected @endif>40</option>
                <option value="80" @if(isset($per_page) && $per_page == 80) selected @endif>80</option>
                <option value="100" @if(isset($per_page) && $per_page == 100) selected @endif>100</option>
            </select>
        </div>
    </div>
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Sort By :</label>
        <div class="select shop__header--select">
            <select class="product__view--select" id="filter_sort_by" onchange="filterProducts()">
                <option value="">Select One</option>
                <option value="1" @if(isset($sort_by) && $sort_by == 1) selected @endif>Price Low to High</option>
                <option value="2" @if(isset($sort_by) && $sort_by == 2) selected @endif>Price High to Low</option>
            </select>
        </div>
    </div>
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Filter By Price:</label>
        <form class="price__filter--form">
            <div class="price__filter--form__inner d-flex align-items-center">
                <div class="price__filter--group">
                    <div class="price__filter--input border-radius-5 d-flex align-items-center">
                        <span class="price__filter--currency">৳</span>
                        <label>
                            <input class="price__filter--input__field border-0" @if(isset($min_price) && $min_price > 0) value="{{$min_price}}" @endif style="padding: 12px 0px;" id="filter_min_price" type="number" placeholder="10" min="0"/>
                        </label>
                    </div>
                </div>
                <div class="price__divider">
                    <span>-</span>
                </div>
                <div class="price__filter--group">
                    <div class="price__filter--input border-radius-5 d-flex align-items-center">
                        <span class="price__filter--currency">৳</span>
                        <label>
                            <input class="price__filter--input__field border-0" @if(isset($max_price) && $max_price > 0) value="{{$max_price}}" @endif style="padding: 12px 0px;" id="filter_max_price" type="number" placeholder="250" min="0"/>
                        </label>
                    </div>
                </div>
            </div>
            <button class="price__filter--btn primary__btn" type="button" onclick="filterProducts()">
                Filter
            </button>
        </form>
    </div>
</div>
<p class="product__showing--count">Showing {{ ($products->currentpage() - 1) * $products->perpage() + 1 }} - {{ $products->currentpage() * $products->perpage() }} of {{ $products->total() }} results</p>
