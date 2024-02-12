<ul class="product__items--action d-flex">
    <li class="product__items--action__list">

        @if(isset(session()->get('cart')[$product->id]))
        <a class="product__items--action__btn add__to--cart cart-{{$product->id}} removeFromCart" data-id="{{$product->id}}" href="javascript:void(0)">
            <i class="fi fi-rs-shopping-cart"></i>
            <span class="add__to--cart__text"> Remove</span>
        </a>
        @else
        <a class="product__items--action__btn add__to--cart cart-{{$product->id}} addToCart" data-id="{{$product->id}}" href="javascript:void(0)">
            <i class="fi fi-rs-shopping-cart"></i>
            <span class="add__to--cart__text"> Add to cart</span>
        </a>
        @endif

    </li>
</ul>
