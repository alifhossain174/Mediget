<button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
    <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
        <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
        <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
        <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
    </svg>
    <span class="widget__filter--btn__text">Filter</span>
</button>

<div class="product__view--mode d-flex align-items-center">
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Prev Page :</label>
        <div class="select shop__header--select">
            <select class="product__view--select">
                <option selected value="1">65</option>
                <option value="2">40</option>
                <option value="3">42</option>
                <option value="4">57</option>
                <option value="5">60</option>
            </select>
        </div>
    </div>
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Sort By :</label>
        <div class="select shop__header--select">
            <select class="product__view--select">
                <option selected value="1">Sort by latest</option>
                <option value="2">Sort by popularity</option>
                <option value="3">Sort by newness</option>
                <option value="4">Sort by rating</option>
            </select>
        </div>
    </div>
    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
        <label class="product__view--label">Filter By Price:</label>
        <form class="price__filter--form" action="#" method="post">
            <div class="price__filter--form__inner d-flex align-items-center">
                <div class="price__filter--group">
                    <div class="price__filter--input border-radius-5 d-flex align-items-center">
                        <span class="price__filter--currency">$</span>
                        <label>
                            <input class="price__filter--input__field border-0" name="filter.v.price.gte"
                                type="number" placeholder="0" min="0" max="250.00" />
                        </label>
                    </div>
                </div>
                <div class="price__divider">
                    <span>-</span>
                </div>
                <div class="price__filter--group">
                    <div class="price__filter--input border-radius-5 d-flex align-items-center">
                        <span class="price__filter--currency">$</span>
                        <label>
                            <input class="price__filter--input__field border-0" name="filter.v.price.lte"
                                type="number" min="0" placeholder="250.00" max="250.00" />
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
<p class="product__showing--count">Showing {{ ($products->currentpage() - 1) * $products->perpage() + 1 }} - {{ $products->currentpage() * $products->perpage() }} of {{ $products->total() }} results</p>
