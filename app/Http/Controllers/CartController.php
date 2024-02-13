<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart($id){

        $product = DB::table('products')->where('id', $id)->first();
        $minVariant = DB::table('product_variants')->where('stock', '>', 0)->where('product_id', $id)->orderBy('price', 'asc')->first();
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "slug" => $product->slug,
                "quantity" => 1,
                "image" => $product->image,
                "price" => $minVariant ? ($minVariant->price > 0 ? $minVariant->price : 0) : ($product->price > 0 ? $product->price : 0),
                "discount_price" => $minVariant ? ($minVariant->discounted_price > 0 ? $minVariant->discounted_price : 0) : ($product->discount_price > 0 ? $product->discount_price : 0),
                // variant
                "unit_id" => $minVariant ? $minVariant->unit_id : null,
            ];
        }

        session()->put('cart', $cart);
        $returnHTML = view('sidebar_cart')->render();
        return response()->json(['rendered_cart' => $returnHTML, 'cartTotalQty' => count(session('cart'))]);
    }

    public function removeCartTtem($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        $returnHTML = view('sidebar_cart')->render();
        // $checkoutCartItems = view('checkout.cart_items')->render();
        // $checkoutTotalAmount = view('checkout.order_total')->render();
        // return response()->json(['rendered_cart' => $returnHTML, 'checkoutCartItems' => $checkoutCartItems, 'checkoutTotalAmount' => $checkoutTotalAmount, 'cartTotalQty' => count(session('cart'))]);
        return response()->json(['rendered_cart' => $returnHTML, 'cartTotalQty' => count(session('cart'))]);
    }

    public function updateCartQty(Request $request){
        $cart = session()->get('cart');
        if(isset($cart[$request->cart_id])) {
            $cart[$request->cart_id]['quantity'] = $request->cart_qty;
            session()->put('cart', $cart);
        }

        $returnHTML = view('sidebar_cart')->render();
        // $checkoutCartItems = view('checkout.cart_items')->render();
        // $checkoutTotalAmount = view('checkout.order_total')->render();
        // return response()->json(['rendered_cart' => $returnHTML, 'checkoutCartItems' => $checkoutCartItems, 'checkoutTotalAmount' => $checkoutTotalAmount, 'success' => 'Cart Qty Updated']);
        return response()->json(['rendered_cart' => $returnHTML, 'success' => 'Cart Qty Updated']);
    }
}
