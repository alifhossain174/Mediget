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

<div class="product__view--mode d-flex align-items-center">
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Show Items :</label>
        <div class="select shop__header--select">
            <select class="product__view--select" name="data_per_page" id="data_per_page">
                <option value="20" selected>20</option>
                <option value="40">40</option>
                <option value="80">80</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Sort By :</label>
        <div class="select shop__header--select">
            <select class="product__view--select">
                <option selected value="1">Sort by Price</option>
                <option value="2">Sort by popularity</option>
                <option value="3">Sort by newness</option>
                <option value="4">Sort by rating</option>
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
                            <input class="price__filter--input__field border-0" style="padding: 12px 0px;" id="min_price" name="min_price" type="number" placeholder="10" min="0"/>
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
                            <input class="price__filter--input__field border-0" style="padding: 12px 0px;" id="max_price" name="max_price" type="number" placeholder="250" min="0"/>
                        </label>
                    </div>
                </div>
            </div>
            <button class="price__filter--btn primary__btn" type="button">
                Filter
            </button>
        </form>
    </div>
</div>
<p class="product__showing--count">Showing {{ ($products->currentpage() - 1) * $products->perpage() + 1 }} - {{ $products->currentpage() * $products->perpage() }} of {{ $products->total() }} results</p>
