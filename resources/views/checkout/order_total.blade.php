<div class="cart-order-summary-main">
    <ul class="cart-order-summary-main-list">
        @php $subTotal = 0 @endphp
        @foreach((array) session('cart') as $id => $details)
            @php $subTotal += ($details['discount_price'] > 0 ? $details['discount_price'] : $details['price']) * $details['quantity'] @endphp
        @endforeach
        <li>Sub total <span>{{number_format($subTotal, 2)}} BDT</span></li>

        @php
            $discount = session('discount') ? session('discount') : 0;
            $discountPercentage = $discount > 0 && $subTotal > 0 ? number_format(($discount/$subTotal)*100,2) : 0;
        @endphp
        <li>Discount <span><b>(-{{$discountPercentage}}%)</b> {{number_format($discount, 2)}} BDT</span></li>
        <li>VAT/TAX <span><b>(0%)</b> 0.00 BDT</span></li>

        @php
            $deliveryCost = session('delivery_cost') ? session('delivery_cost') : 0;
        @endphp
        <li>Delivery cost <span>{{number_format($deliveryCost, 2)}} BDT</span></li>

        <li class="total-price">
            Total<span>{{number_format($subTotal-$discount+$deliveryCost, 2)}} BDT</span>
        </li>
    </ul>
</div>
