@if ($variants && count($variants) > 0)
    <div class="product__items--price">
        @if ($variantMinDiscountPrice > 0)
            <span class="current__price">BDT {{ number_format($variantMinDiscountPrice, 2) }}</span>
            <span class="price__divided"></span>
            <span class="old__price">BDT {{ number_format($variantMinPrice, 2) }}</span>
        @else
            <span class="current__price">BDT {{ number_format($variantMinPrice, 2) }}</span>
        @endif
    </div>
@else
    <div class="product__items--price">
        @if ($product->discount_price > 0)
            <span class="current__price">BDT {{ number_format($product->discount_price, 2) }}</span>
            <span class="price__divided"></span>
            <span class="old__price">BDT {{ number_format($product->price, 2) }}</span>
        @else
            <span class="current__price">BDT {{ number_format($product->price, 2) }}</span>
        @endif
    </div>
@endif
