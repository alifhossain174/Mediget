@if (isset(session()->get('cart')[$product->id]))
    <div class="product-d-info-single-btn">
        <a href="javascript:void(0)" class="primary__btn add-to-cart cart-qty-{{ $product->id }} removeFromCartQty" data-id="{{ $product->id }}">
            <i class="fi-rr-shopping-bag-add"></i>Remove from cart
        </a>
    </div>
@else
    <div class="product-d-info-single-btn">
        <a href="javascript:void(0)" class="primary__btn add-to-cart cart-qty-{{ $product->id }} addToCartWithQty" data-id="{{ $product->id }}">
            <i class="fi-rr-shopping-bag-add"></i>Add to cart
        </a>
    </div>
    <div class="product-d-info-single-btn">
        <a href="javascript:void(0)" class="primary__btn buy-now-btn buyNowWithQty" data-id="{{$product->id}}">
            <i class="fi-rr-shopping-bag"></i>Buy now
        </a>
    </div>
@endif

