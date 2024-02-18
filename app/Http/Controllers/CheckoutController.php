<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlacedEmail;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(){

        if(!session('cart') || (session('cart') && count(session('cart')) <= 0)){
            Toastr::error('No Products Found in Cart', 'Failed to Checkout');
            return redirect('/');
        }

        return view('checkout.checkout');
    }

    public function applyCoupon(Request $request){

        $couponCode = $request->coupon_code;
        $couponInfo = DB::table('promo_codes')->where('code', $couponCode)->first();
        if($couponInfo){

            if(DB::table('orders')->where('coupon_code', $couponInfo->code)->where('user_id', Auth::user()->id)->exists()){
                session([
                    'coupon' => $couponCode,
                    'discount' => 0
                ]);
                $checkoutTotalAmount = view('checkout.order_total')->render();
                return response()->json(['message' => 'Coupon Already Used', 'status' => 0, 'checkoutTotalAmount' => $checkoutTotalAmount]);
            }

            if($couponInfo->expire_date < date("Y-m-d")){
                session([
                    'coupon' => $couponCode,
                    'discount' => 0
                ]);
                $checkoutTotalAmount = view('checkout.order_total')->render();
                return response()->json(['message' => 'Coupon is Expired', 'status' => 0, 'checkoutTotalAmount' => $checkoutTotalAmount]);
            }

            $subTotal = 0;
            foreach((array) session('cart') as $id => $details){
                $subTotal += ($details['discount_price'] > 0 ? $details['discount_price'] : $details['price']) * $details['quantity'];
            }

            if($couponInfo->minimum_order_amount && $couponInfo->minimum_order_amount > $subTotal){
                session([
                    'coupon' => $couponCode,
                    'discount' => 0
                ]);
                $checkoutTotalAmount = view('checkout.order_total')->render();
                return response()->json(['message' => 'Sorry! Minimum Order Amount is '.$couponInfo->minimum_order_amount, 'status' => 0, 'checkoutTotalAmount' => $checkoutTotalAmount]);
            }

            $discount = 0;
            if($couponInfo->type == 1){
                $discount = $couponInfo->value;
            } else {
                $discount = ($subTotal*$couponInfo->value)/100;
            }

            session([
                'coupon' => $couponCode,
                'discount' => $discount
            ]);

            $checkoutTotalAmount = view('checkout.order_total')->render();
            return response()->json(['message' => 'Coupon Applied Successfully', 'status' => 1, 'checkoutTotalAmount' => $checkoutTotalAmount]);


        } else {
            session([
                'coupon' => $couponCode,
                'discount' => 0
            ]);
            $checkoutTotalAmount = view('checkout.order_total')->render();
            return response()->json(['message' => 'Sorry No Coupon Found', 'status' => 0, 'checkoutTotalAmount' => $checkoutTotalAmount]);
        }

    }

    public function districtWiseThana(Request $request){

        $districtWiseDeliveryCharge = 0;
        $districtInfo = DB::table('districts')->where('id', $request->district_id)->first();
        if($districtInfo){
            $districtWiseDeliveryCharge = $districtInfo->delivery_charge;
        }

        session(['delivery_cost' => $districtWiseDeliveryCharge]);

        $data = DB::table('upazilas')->where("district_id", $request->district_id)->select('name', 'id')->orderBy('name', 'asc')->get();
        $checkoutTotalAmount = view('checkout.order_total')->render();
        return response()->json(['data' => $data, 'checkoutTotalAmount' => $checkoutTotalAmount]);
    }

    function changeDeliveryMethod(Request $request){
        if($request->delivery_method == 1){ //home delivery and charge applicable
            $districtInfo = DB::table('districts')->where('id', $request->district_id)->first();
            if($districtInfo){
                session(['delivery_cost' => $districtInfo->delivery_charge]);
            } else {
                session(['delivery_cost' => 0]);
            }
        } else {
            session(['delivery_cost' => 0]);
        }
        $checkoutTotalAmount = view('checkout.order_total')->render();
        return response()->json(['checkoutTotalAmount' => $checkoutTotalAmount]);
    }

    public function placeOrder(Request $request){

        if(!session('cart') || (session('cart') && count(session('cart')) <= 0)){
            Toastr::error('No Products Found in Checkout', 'Failed to Place Order');
            return redirect('/');
        }

        date_default_timezone_set("Asia/Dhaka");
        $total = 0;
        foreach((array) session('cart') as $id => $details){
            $total += ($details['discount_price'] > 0 ? $details['discount_price'] : $details['price']) * $details['quantity'];
        }
        $discount = session('discount') ? session('discount') : 0;
        $deliveryCost = session('delivery_cost') ? session('delivery_cost') : 0;
        $couponCode = session('coupon') ? session('coupon') : 0;

        $orderId = DB::table('orders')->insertGetId([
            'order_no' => time().rand(100,999),
            'user_id' => auth()->user()->id,
            'order_date' => date("Y-m-d H:i:s"),
            'estimated_dd' => date('Y-m-d', strtotime("+7 day", strtotime(date("Y-m-d")))),
            'delivery_method' => $request->delivery_method,
            'payment_method' => 1,
            'payment_status' => 1,
            'trx_id' => time().str::random(5),
            'order_status' => 0,
            'sub_total' => $total,
            'coupon_code' => $couponCode,
            'discount' => $discount,
            'delivery_fee' => $deliveryCost,
            'vat' => 0,
            'tax' => 0,
            'total' => $total+$deliveryCost-$discount,
            'order_note' => $request->special_note,
            'complete_order' => 1,
            'slug' => str::random(5) . time(),
            'created_at' => Carbon::now()
        ]);

        DB::table('order_progress')->insert([
            'order_id' => $orderId,
            'order_status' => 0,
            'created_at' => Carbon::now()
        ]);

        foreach(session('cart') as $id => $details){

            // decrement the stock
            $productInfo = DB::table('products')->where('id', $id)->first();
            DB::table('products')->where('id', $id)->update([
                'stock' => $productInfo->stock - $details['quantity'],
            ]);

            DB::table('order_details')->insert([
                'order_id' => $orderId,
                'product_id' => $id,

                // VARIANT
                'unit_id' => isset($details['unit_id']) ? $details['unit_id'] : $productInfo->unit_id,
                'color_id' => null,
                'region_id' => null,
                'sim_id' => null,
                'size_id' => null,
                'storage_id' => null,
                'warrenty_id' => null,
                'device_condition_id' => null,

                'qty' => $details['quantity'],
                'unit_price' => $details['discount_price'] > 0 ? $details['discount_price'] : $details['price'],
                'total_price' => ($details['discount_price'] > 0 ? $details['discount_price'] : $details['price']) * $details['quantity'],
                'created_at' => Carbon::now()
            ]);
        }

        $shippingDistrictInfo = DB::table('districts')->where('id', $request->shipping_district_id)->first();
        $shippingThanaInfo = DB::table('upazilas')->where('id', $request->shipping_thana_id)->first();
        DB::table('shipping_infos')->insert([
            'order_id' => $orderId,
            'full_name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => null,
            'address' => $request->shipping_address,
            'thana' => $shippingThanaInfo->name,
            'post_code' => $request->shipping_postal_code,
            'city' => $shippingDistrictInfo->name,
            'country' => 'Bangladesh',
            'created_at' => Carbon::now()
        ]);


        if($request->shipping_district_id != $request->billing_district_id){
            $billingDistrictInfo = DB::table('districts')->where('id', $request->billing_district_id)->first();
        } else {
            $billingDistrictInfo = $shippingDistrictInfo;
        }

        if($request->shipping_thana_id != $request->billing_thana_id){
            $billingThanaInfo = DB::table('upazilas')->where('id', $request->billing_thana_id)->first();
        } else {
            $billingThanaInfo = $shippingThanaInfo;
        }

        DB::table('billing_addresses')->insert([
            'order_id' => $orderId,
            'address' => $request->billing_address,
            'post_code' => $request->billing_postal_code,
            'thana' => $billingThanaInfo->name,
            'city' => $billingDistrictInfo->name,
            'country' => 'Bangladesh',
            'created_at' => Carbon::now()
        ]);

        if($request->email){
            DB::table('subscribed_users')->insert([
                'email' => $request->email,
                'created_at' => Carbon::now()
            ]);
        }

        $orderInfo = DB::table('orders')->where('id', $orderId)->first();
        DB::table('order_payments')->insert([
            'order_id' => $orderId,
            'payment_through' => "COD",
            'tran_id' => $orderInfo->trx_id,
            'val_id' => NULL,
            'amount' => $orderInfo->total,
            'card_type' => NULL,
            'store_amount' => $orderInfo->total,
            'card_no' => NULL,
            'status' => "VALID",
            'tran_date' => date("Y-m-d H:i:s"),
            'currency' => "BDT",
            'card_issuer' => NULL,
            'card_brand' => NULL,
            'card_sub_brand' => NULL,
            'card_issuer_country' => NULL,
            'created_at' => Carbon::now()
        ]);


        // sending order email
        try {

            $emailConfig = DB::table('email_configures')->where('status', 1)->orderBy('id', 'desc')->first();
            $userEmail = $request->email;

            if($emailConfig && $userEmail){
                $decryption = "";
                if($emailConfig){

                    $ciphering = "AES-128-CTR";
                    $options = 0;
                    $decryption_iv = '1234567891011121';
                    $decryption_key = "GenericCommerceV1";
                    $decryption = openssl_decrypt ($emailConfig->password, $ciphering, $decryption_key, $options, $decryption_iv);

                    config([
                        'mail.mailers.smtp.host' => $emailConfig->host,
                        'mail.mailers.smtp.port' => $emailConfig->port,
                        'mail.mailers.smtp.username' => $emailConfig->email,
                        'mail.mailers.smtp.password' => $decryption != "" ? $decryption : '',
                        'mail.mailers.smtp.encryption' => $emailConfig ? ($emailConfig->encryption == 1 ? 'tls' : ($emailConfig->encryption == 2 ? 'ssl' : '')) : '',
                    ]);

                    Mail::to(trim($userEmail))->send(new OrderPlacedEmail($orderInfo));
                }
            }

        } catch(\Exception $e) {
            // write code for handling error from here
        }
        // sending order email done

        session()->forget('coupon');
        session()->forget('discount');
        session()->forget('delivery_cost');
        session()->forget('cart');

        return redirect('order/'.$orderInfo->slug);

    }

    public function orderPreview($slug){
        $orderInfo = DB::table('orders')->select('order_no')->where('slug', $slug)->first();
        if($orderInfo){
            return view('order_preview', compact('orderInfo'));
        } else {
            Toastr::error('No Order Found');
            return redirect('/');
        }
    }
}
