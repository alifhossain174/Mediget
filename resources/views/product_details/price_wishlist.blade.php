<div class="product-d-info-main-top">

    @if(count($variants) == 0)
        <div class="product-d-info-main-price">
            <p>Best Price @if($product->discount_price > 0) <span>{{ number_format((100*($product->price-$product->discount_price))/$product->discount_price, 2) }}% OFF</span> @endif</p>
            <div class="product-d-info-main-price-group">
                @if($product->discount_price > 0)
                    <strong>{{number_format($product->discount_price)}} BDT</strong>
                    <del>{{number_format($product->price)}} BDT</del>
                    <input type="hidden" id="product_discount_price" value="{{$product->discount_price}}">
                    <input type="hidden" id="product_price" value="{{$product->price}}">
                @else
                    <strong>{{number_format($product->price)}} BDT</strong>
                    <input type="hidden" id="product_discount_price" value="0">
                    <input type="hidden" id="product_price" value="{{$product->price}}">
                @endif
            </div>
        </div>
    @endif

    <div class="product-d-info-wishlist-btn">
        @if(Auth::user() && DB::table('wish_lists')->where('product_id', $product->id)->where('user_id', Auth::user()->id)->exists())
        <a href="{{ url('remove/from/wishlist') }}/{{$product->slug}}" class="removeFromWishlist">
            <i class="fi-rr-heart"></i>Remove from Wishlist
        </a>
        @else
        <a href="{{ url('add/to/wishlist') }}/{{$product->slug}}">
            <i class="fi-rr-heart"></i>Wishlist
        </a>
        @endif
    </div>
</div>
