<!-- Product Delivery Info Area -->
<section class="product-delivery-info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-delivery-info-inner">

                    <!-- Single Delivery Info -->
                    <div class="p-delivery-info-single">
                        <div class="p-delivery-info-icon">
                            <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL').'/'.$product->brand_logo}}" alt="" />
                        </div>
                        <div class="p-delivery-info-content">
                            <p>Medicine company:</p>
                            <h4>{{$product->brand_name}}</h4>
                        </div>
                    </div>

                    <!-- Single Delivery Info -->
                    <div class="p-delivery-info-single">
                        <div class="p-delivery-info-icon">
                            <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{url('assets')}}/img/icons/delivery-boy.svg" alt="" />
                        </div>
                        <div class="p-delivery-info-content">
                            <p>Delivery charge</p>
                            <h4>{{DB::table('districts')->where('id', 47)->first()->delivery_charge}} BDT (In Dhaka)</h4>
                        </div>
                    </div>
                    <!-- Single Delivery Info -->
                    <div class="p-delivery-info-single">
                        <div class="p-delivery-info-icon">
                            <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{url('assets')}}/img/icons/delivery-boy.svg" alt="" />
                        </div>
                        <div class="p-delivery-info-content">
                            <p>Delivery charge</p>
                            <h4>{{DB::table('districts')->max('delivery_charge')}} BDT (Outside Dhaka)</h4>
                        </div>
                    </div>
                    <!-- Single Delivery Info -->
                    <div class="p-delivery-info-single">
                        <div class="p-delivery-info-icon">
                            <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{url('assets')}}/img/icons/truck.svg" alt="" />
                        </div>
                        <div class="p-delivery-info-content">
                            <h4>Express Delivery in Dhaka Intercity</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Delivery Info Area -->
