<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ForgetPasswordController;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('Index');
Route::get('/otc', [FrontendController::class, 'otc'])->name('Otc');
Route::get('/shop', [FrontendController::class, 'shop'])->name('Shop');
Route::post('filter/products', [FilterController::class, 'filterProducts'])->name('FilterProducts');
Route::get('search/for/products', [FrontendController::class, 'searchForProducts'])->name('SearchForProducts');
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


// forget password
Route::group(['middleware' => ['web']], function () { //wihout web middleware session will not work
    Route::get('/forget/password', [ForgetPasswordController::class, 'userForgetPassword'])->name('UserForgetPassword');
    Route::post('/send/forget/password/code', [ForgetPasswordController::class, 'sendForgetPasswordCode'])->name('SendForgetPasswordCode');
    Route::get('/new/password', [ForgetPasswordController::class, 'newPasswordPage'])->name('NewPasswordPage');
    Route::post('/change/forgotten/password', [ForgetPasswordController::class, 'changeForgetPassword'])->name('ChangeForgetPassword');
});





Route::group(['middleware' => ['auth']], function () {

    Route::get('/user/verification', [HomeController::class, 'userVerification'])->name('UserVerification');
    Route::post('/user/verify/check', [HomeController::class, 'userVerifyCheck'])->name('UserVerifyCheck');
    Route::get('/user/verification/resend', [HomeController::class, 'userVerificationResend'])->name('UserVerificationResend');

    Route::group(['middleware' => ['CheckUserVerification']], function () {

        Route::post('submit/product/review', [HomeController::class, 'submitProductReview'])->name('SubmitProductReview');
        Route::get('add/to/wishlist/{slug}', [HomeController::class, 'addToWishlist'])->name('AddToWishlist');
        Route::get('remove/from/wishlist/{slug}', [HomeController::class, 'removeFromWishlist'])->name('removeFromWishlist');

        Route::get('/home', [HomeController::class, 'index'])->name('home');

    });

});
