<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('Index');
Route::get('/otc', [FrontendController::class, 'otc'])->name('Otc');
Route::get('/shop', [FrontendController::class, 'shop'])->name('Shop');
Route::get('/product/details/{slug}', [FrontendController::class, 'productDetails'])->name('ProductDetails');


// cart related routes
Route::get('add/to/cart/{id}', [CartController::class, 'addToCart'])->name('AddToCart');
Route::post('add/to/cart/with/qty', [CartController::class, 'addToCartWithQty'])->name('AddToCartWithQty');
Route::get('remove/cart/item/{id}', [CartController::class, 'removeCartTtem'])->name('RemoveCartTtem');
Route::post('update/cart/qty', [CartController::class, 'updateCartQty'])->name('UpdateCartQty');


Route::get('/nursing/service/request', [FrontendController::class, 'nursingService'])->name('NursingService');
Route::get('/doctors', [FrontendController::class, 'doctors'])->name('Doctors');
Route::get('/doctor/details/{slug}', [FrontendController::class, 'doctorDetails'])->name('DoctorDetails');
Route::get('/upload/prescription', [FrontendController::class, 'uploadPrescription'])->name('UploadPrescription');
Route::get('/request/medicine', [FrontendController::class, 'requestMedicine'])->name('RequestMedicine');


Route::get('/home', [HomeController::class, 'index'])->name('home');




// protected routes
Route::post('submit/product/review', [HomeController::class, 'submitProductReview'])->name('SubmitProductReview');
Route::get('add/to/wishlist/{slug}', [HomeController::class, 'addToWishlist'])->name('AddToWishlist');
Route::get('remove/from/wishlist/{slug}', [HomeController::class, 'removeFromWishlist'])->name('removeFromWishlist');
