
<style>
    .address_box{
        border: 2px solid white;
        border-radius: 8px;
        padding: 5px 12px;
        box-shadow: 2px 2px 5px #00000047;
        cursor: pointer;
    }
    .address_box label{
        cursor: pointer;
    }
    address{
        margin-bottom: 0px;
        line-height: 20px;
        font-size: 14px;
    }
</style>

<div class="checkout-personal-details single-details-box">
    <div class="single-details-checkout-widget">
        <h5 class="checkout-widget-title">Personal info</h5>
        <div class="c-personal-details-box single-details-box-inner">
            <div class="form-group">
                <label>Full name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}" required=""/>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" value="{{Auth::user()->email}}" @if(Auth::user()->email) readonly style="background: #f2f2f2" @endif required=""/>
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="tel" name="phone" value="{{Auth::user()->phone}}" @if(Auth::user()->phone) readonly style="background: #f2f2f2" @endif required=""/>
            </div>
        </div>
    </div>

    @php
        $savedAddressed = DB::table('user_addresses')->where('user_id', Auth::user()->id)->get();
    @endphp

    @if(count($savedAddressed) > 0)
    <div class="single-details-checkout-widget">
        <h5 class="checkout-widget-title">Saved Addresses</h5>
        <div class="row gx-1">
            @foreach ($savedAddressed as $index => $address)
            <div class="col" @if($index == 0) style="padding-right: 5px" @else style="padding-left: 5px" @endif>
                <div class="address_box">
                    <label for="saved_address_{{$address->slug}}">
                        <b class="d-block"><input type="radio" id="saved_address_{{$address->slug}}" name="saved_address" onchange="applySavedAddress('{{$address->slug}}')"> {{$address->address_type}} Address</b>
                        <address>{{$address->address}}, {{$address->state}}-{{$address->post_code}}, {{$address->city}}</address>

                        <input type="hidden" id="saved_address_line_{{$address->slug}}" value="{{$address->address}}">
                        <input type="hidden" id="saved_address_district_{{$address->slug}}" value="{{$address->city}}">
                        <input type="hidden" id="saved_address_upazila_{{$address->slug}}" value="{{$address->state}}">
                        <input type="hidden" id="saved_address_post_code_{{$address->slug}}" value="{{$address->post_code}}">

                    </label>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif


    <div class="single-details-checkout-widget">
        <h5 class="checkout-widget-title">Shipping address</h5>
        <div class="c-personal-details-box single-details-box-inner">
            <div class="form-group">
                <label>Street address *</label>
                <input type="text" name="shipping_address" id="shipping_address" value="{{Auth::user()->address}}" required=""/>
            </div>
            <div class="form-group">
                <label>Select district *</label>
                @php
                    $districts = DB::table('districts')->orderBy('name', 'asc')->get();
                @endphp
                <select name="shipping_district_id" data-toggle="select2" id="shipping_district_id" required>
                    <option data-display="Select One" value="">Select One</option>
                    @foreach ($districts as $district)
                    <option value="{{$district->id}}">{{$district->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Select thana *</label>
                <select name="shipping_thana_id" data-toggle="select2" id="shipping_thana_id" required>
                    <option data-display="Select One" value="">Select One</option>
                </select>
            </div>
            <div class="form-group">
                <label>Postal code</label>
                <input type="text" name="shipping_postal_code" id="shipping_postal_code" placeholder="ex:1000"/>
            </div>

            <div class="checkout-checkbox-details">
                <input class="form-check-input" type="checkbox" id="flexCheckChecked" onchange="sameShippingBilling()" value="" />
                <label class="form-check-label" for="flexCheckChecked"> My Shipping & Billing addresses are same.</label>
            </div>
        </div>
    </div>

    <div class="single-details-checkout-widget">
        <h5 class="checkout-widget-title">Billing address</h5>
        <div class="c-personal-details-box single-details-box-inner">
            <div class="form-group">
                <label>Street address *</label>
                <input type="text" name="billing_address" id="billing_address" value="{{Auth::user()->address}}" required=""/>
            </div>
            <div class="form-group select-style-2">
                <label>Select district *</label>
                <select name="billing_district_id" id="billing_district_id" data-toggle="select2" required>
                    <option data-display="Select One" value="">Select One</option>
                    @foreach ($districts as $district)
                    <option value="{{$district->id}}">{{$district->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group select-style-2">
                <label>Select thana *</label>
                <select name="billing_thana_id" data-toggle="select2" id="billing_thana_id" required>
                    <option data-display="Select One">Select One</option>
                </select>
            </div>
            <div class="form-group">
                <label>Postal colde</label>
                <input type="text" name="billing_postal_code" id="billing_postal_code" placeholder="ex:1000"/>
            </div>

        </div>
    </div>

</div>

<div class="checkout-payment-method single-details-box">
    <div class="single-details-checkout-widget">
        <h5 class="checkout-widget-title">Payment Method</h5>
        @php
            $paymentGateways = DB::table('payment_gateways')->get();
        @endphp
        <div class="checkout-payment-method-inner single-details-box-inner">
            <div class="payment-method-input">
                <label for="flexRadioDefault1">
                    <div class="payment-method-input-main">
                        <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault1" required/>
                        On Delivery (COD service)
                    </div>
                </label>

                @if($paymentGateways[0]->status == 1)
                <label for="flexRadioDefault2" style="cursor: no-drop;">
                    <div class="payment-method-input-main">
                        <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault2" disabled/>
                        SSLCommerz
                    </div>
                    <img alt="SSLCommerz" src="{{url(env('ADMIN_URL')."/images/ssl_commerz.png")}}" style="max-width: 90px;"/>
                </label>
                @endif

                @if($paymentGateways[2]->status == 1)
                <label for="flexRadioDefault3" style="cursor: no-drop;">
                    <div class="payment-method-input-main">
                        <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault3" disabled/>
                        bKash Payment
                    </div>
                    <img alt="bKash Payment" src="{{url(env('ADMIN_URL')."/images/bkash_payment_gateway.png")}}" style="max-width: 45px;"/>
                </label>
                @endif

                @if($paymentGateways[3]->status == 1)
                <label for="flexRadioDefault3" style="cursor: no-drop;">
                    <div class="payment-method-input-main">
                        <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault3" disabled/>
                        amarPay
                    </div>
                    <img alt="amarPay" src="{{url(env('ADMIN_URL')."/images/amar_pay.png")}}" style="max-width: 90px;"/>
                </label>
                @endif

            </div>
        </div>
    </div>

    <div class="single-details-checkout-widget">
        <h5 class="checkout-widget-title">Delivery method</h5>
        <div class="checkout-payment-method-inner single-details-box-inner">
            <div class="payment-method-input">
                <label for="flexRadioDefault4">
                    <div class="payment-method-input-main">
                        <input class="form-check-input" type="radio" name="delivery_method" onchange="changeDeliveryMethod(1)" value="1" id="flexRadioDefault4" required/>
                        Home delivery
                    </div>
                </label>
                <label for="flexRadioDefault5">
                    <div class="payment-method-input-main">
                        <input class="form-check-input" type="radio" name="delivery_method" onchange="changeDeliveryMethod(2)" value="2" id="flexRadioDefault5" required/>
                        Store pickup
                    </div>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="checkout-order-review-bottom">
    <div class="row">
        <div class="col-12">
            <div class="checkout-checkbox-details">
                <input class="form-check-input" type="checkbox" id="flexCheckChecked2" value="" required/>
                <label class="form-check-label" for="flexCheckChecked2">
                    I have read and agree to the <a href="{{url('terms/of/services')}}" target="_blank">Terms and Conditions</a>, <a href="{{url('privacy/policy')}}" target="_blank">Privacy Policy</a> & <a href="{{url('return/refund/policy')}}" target="_blank">Refund and Return Policy</a>.
                </label>
            </div>
        </div>
        <div class="col-12">
            <div class="checkout-order-review-button">
                <button type="submit" class="theme-btn">
                    Place order
                </button>
            </div>
        </div>
    </div>
</div>

