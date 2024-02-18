<div class="checkout-order-review-coupon-box">
    <p class="m-0 checkout-order-review-coupon-box-title">
        Have any coupon or gift voucher?
    </p>
    <div class="cart-single-coupon-form">
        <div class="cart-single-coupon-input">
            <input type="text" placeholder="Enter coupon" name="coupon_code" style="padding-left: 10px;" @if(session('coupon')) value="{{session('coupon')}}" @endif id="coupon_code"/>
            <div class="cart-coupon-form-btn">
                <button type="button" onclick="applyCoupon()" class="theme-btn hover">
                    Apply coupon
                </button>
            </div>
        </div>
    </div>
</div>
