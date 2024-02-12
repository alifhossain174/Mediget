<div class="minicart__header">
    <div class="minicart__header--top d-flex justify-content-between align-items-center">
        <h2 class="minicart__title h3">Shopping Cart</h2>
        <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
            </svg>
        </button>
    </div>
</div>


@if(session('cart') && count(session('cart')))
    <div class="minicart__product">

        @foreach(session('cart') as $id => $details)
        <div class="minicart__product--items d-flex">
            <div class="minicart__thumb">
                <a href="{{ url('product/details') }}/{{ $details['slug'] }}">
                    <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{ url(env('ADMIN_URL')."/".$details['image']) }}" alt="" />
                </a>
            </div>
            <div class="minicart__text">
                <h3 class="minicart__subtitle h4">
                    <a href="{{ url('product/details') }}/{{ $details['slug'] }}">{{ substr($details['name'], 0, 25) }}..</a>
                </h3>
                @if($details['unit_id'] && $unitInfo = DB::table('units')->where('id', $details['unit_id'])->first()) <span class="color__variant" style="font-size: 14px"><b>Unit:</b> {{$unitInfo->name}}</span> @endif
                <div class="minicart__price">
                    @if($details['discount_price'] > 0 && $details['discount_price'] < $details['price'])
                        <span class="current__price">BDT {{$details['discount_price']}}</span>
                        <input type="hidden" class="cart_product_single_price" value="{{$details['discount_price']}}">
                    @else
                        <span class="current__price">BDT {{$details['price']}}</span>
                        <input type="hidden" class="cart_product_single_price" value="{{$details['price']}}">
                    @endif

                    @if($details['discount_price'] > 0 && $details['discount_price'] < $details['price'])
                    <span class="old__price">BDT {{$details['price']}}</span>
                    @endif
                </div>
                <div class="minicart__text--footer d-flex align-items-center">
                    <div class="quantity__box minicart__quantity">
                        <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                        <label>
                            <input type="number" class="quantity__number" value="1" data-counter />
                        </label>
                        <button type="button" class="quantity__value increase" value="Increase Value">+</button>
                    </div>
                    <button class="minicart__product--remove">Remove</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="minicart__amount">
        <div class="minicart__amount_list d-flex justify-content-between">
            <span style="font-weight: 600;">Total:</span>
            @php $cartTotal = 0 @endphp
            @foreach((array) session('cart') as $id => $details)
                @php
                    $cartTotal += ($details['discount_price'] > 0 ? $details['discount_price'] : $details['price']) * $details['quantity']
                @endphp
            @endforeach
            <span><b class="sidebar-product-subtotal-price">BDT {{number_format($cartTotal, 2)}}</b></span>
        </div>
    </div>
    <div class="minicart__button d-flex justify-content-center pt-5">
        <a class="primary__btn minicart__button--link" href="{{url('/checkout')}}">Checkout</a>
    </div>
@else
    <div style="display:block; width: 100%; height: 100%; text-align:center; position: relative;">
        <div style="width: 100%; position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%);">
            <img src="{{url('frontend_assets')}}/img/empty_cart.png" alt="Empty Cart">
            <h5>There are no more items in your cart!</h5>
            <a href="javascript:void(0)" onclick="closeMiniCart()" class="auth-card-form-btn primary__btn" style="width: 220px; margin: auto;">Continue Shopping</a>
        </div>
    </div>
@endif
