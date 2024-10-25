<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ServiceController;
use Spatie\Honeypot\ProtectAgainstSpam;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('Index');
Route::get('/track/order', [FrontendController::class, 'trackOrder'])->name('trackOrder');
Route::post('/redirect/for/tracking', [FrontendController::class, 'redirectForTracking'])->name('RedirectForTracking');
Route::get('/otc', [FrontendController::class, 'otc'])->name('Otc');
Route::get('/shop', [FrontendController::class, 'shop'])->name('Shop');
Route::post('filter/products', [FilterController::class, 'filterProducts'])->name('FilterProducts');
Route::get('search/for/products', [FrontendController::class, 'searchForProducts'])->name('SearchForProducts');
Route::get('/product/details/{slug}', [FrontendController::class, 'productDetails'])->name('ProductDetails');


Route::get('/about', [FrontendController::class, 'about'])->name('About');
Route::get('/faq', [FrontendController::class, 'faq'])->name('Faq');
Route::get('/contact', [FrontendController::class, 'contact'])->name('Contact');
Route::post('/submit/contact/request', [FrontendController::class, 'submitContactRequest'])->name('SubmitContactRequest')->middleware(ProtectAgainstSpam::class)->middleware(['throttle:3,1']);
Route::post('subscribe/for/newsletter', [FrontendController::class, 'subscribeForNewsletter'])->name('SubscribeForNewsletter')->middleware(ProtectAgainstSpam::class)->middleware(['throttle:3,1']);
Route::post('send/app/link', [FrontendController::class, 'sendAppLink'])->name('SendAppLink')->middleware(ProtectAgainstSpam::class)->middleware(['throttle:3,1']);


// policy pages
Route::get('privacy/policy', [FrontendController::class, 'privacyPolicy'])->name('PrivacyPolicy');
Route::get('terms/of/services', [FrontendController::class, 'termsOfServices'])->name('TermsOfServices');
Route::get('refund/policy', [FrontendController::class, 'refundPolicy'])->name('RefundPolicy');
Route::get('shipping/policy', [FrontendController::class, 'shippingPolicy'])->name('ShippingPolicy');


// cart related routes
Route::get('add/to/cart/{id}', [CartController::class, 'addToCart'])->name('AddToCart');
Route::post('add/to/cart/with/qty', [CartController::class, 'addToCartWithQty'])->name('AddToCartWithQty');
Route::get('remove/cart/item/{id}', [CartController::class, 'removeCartTtem'])->name('RemoveCartTtem');
Route::post('update/cart/qty', [CartController::class, 'updateCartQty'])->name('UpdateCartQty');

// services
Route::get('/doctors', [FrontendController::class, 'doctors'])->name('Doctors');
Route::get('/doctor/details/{slug}', [FrontendController::class, 'doctorDetails'])->name('DoctorDetails');


// forget password
Route::group(['middleware' => ['web']], function () { //wihout web middleware session will not work
    Route::get('/forget/password', [ForgetPasswordController::class, 'userForgetPassword'])->name('UserForgetPassword');
    Route::post('/send/forget/password/code', [ForgetPasswordController::class, 'sendForgetPasswordCode'])->name('SendForgetPasswordCode');
    Route::get('/new/password', [ForgetPasswordController::class, 'newPasswordPage'])->name('NewPasswordPage');
    Route::post('/change/forgotten/password', [ForgetPasswordController::class, 'changeForgetPassword'])->name('ChangeForgetPassword');
});


// social login
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('RedirectToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('HandleGoogleCallback');



Route::group(['middleware' => ['auth']], function () {

    Route::get('/user/verification', [HomeController::class, 'userVerification'])->name('UserVerification');
    Route::post('/user/verify/check', [HomeController::class, 'userVerifyCheck'])->name('UserVerifyCheck');
    Route::get('/user/verification/resend', [HomeController::class, 'userVerificationResend'])->name('UserVerificationResend');

    Route::group(['middleware' => ['CheckUserVerification']], function () {

        // nursing services
        Route::get('/nursing/service/request', [ServiceController::class, 'nursingService'])->name('NursingService');
        Route::post('/submit/nursing/request', [ServiceController::class, 'submitNursingRequest'])->name('SubmitNursingRequest')->middleware(ProtectAgainstSpam::class)->middleware(['throttle:4,1']);
        Route::get('/my/nursing/services', [ServiceController::class, 'myNursingServices'])->name('MyNursingServices');
        Route::get('/remove/nursing/request/{slug}', [ServiceController::class, 'removeNursingRequest'])->name('RemoveNursingRequest');
        Route::get('/edit/nursing/request/{slug}', [ServiceController::class, 'editNursingRequest'])->name('EditNursingRequest');
        Route::post('/update/nursing/request', [ServiceController::class, 'updateNursingRequest'])->name('UpdateNursingRequest');

        // prescription services
        Route::get('/upload/prescription', [ServiceController::class, 'uploadPrescription'])->name('UploadPrescription');
        Route::post('/submit/my/prescription', [ServiceController::class, 'submitMyPrescription'])->name('SubmitMyPrescription')->middleware(ProtectAgainstSpam::class)->middleware(['throttle:4,1']);
        Route::get('/my/prescriptions', [ServiceController::class, 'myPrescriptions'])->name('MyPrescriptions');
        Route::get('/remove/prescription/{slug}', [ServiceController::class, 'removePrescription'])->name('RemovePrescription');
        Route::get('/edit/prescription/{slug}', [ServiceController::class, 'editPrescription'])->name('EditPrescription');
        Route::post('/update/my/prescription', [ServiceController::class, 'updatePrescription'])->name('UpdatePrescription');

        // medicine from abroad service
        Route::get('/request/medicine', [ServiceController::class, 'requestMedicine'])->name('RequestMedicine');
        Route::post('/submit/medicine/request', [ServiceController::class, 'submitMedicineRequest'])->name('SubmitMedicineRequest');
        Route::get('/my/medicine/requests', [ServiceController::class, 'myMedicineRequests'])->name('MyMedicineRequests');
        Route::get('/remove/medicine/requests/{slug}', [ServiceController::class, 'removeMedicineRequest'])->name('RemoveMedicineRequest');

        // Doctor Visit Request
        Route::get('/doctor/visit/request/{slug}', [FrontendController::class, 'doctorVisitRequest'])->name('DoctorVisitRequest');
        Route::post('/submit/doctor/visit/request', [FrontendController::class, 'submitDoctorVisitRequest'])->name('SubmitDoctorVisitRequest');
        Route::get('/doctor/appoinments', [ServiceController::class, 'doctorAppoinments'])->name('DoctorAppoinments');
        Route::get('/remove/doctor/appointment/{slug}', [ServiceController::class, 'removeDoctorAppoinment'])->name('RemoveDoctorAppoinment');
        Route::get('/edit/doctor/appointment/{slug}', [ServiceController::class, 'editDoctorAppoinment'])->name('EditDoctorAppoinment');
        Route::post('/update/doctor/appointment', [ServiceController::class, 'updateDoctorAppoinment'])->name('UpdateDoctorAppoinment');



        Route::post('submit/product/review', [HomeController::class, 'submitProductReview'])->name('SubmitProductReview');
        Route::get('add/to/wishlist/{slug}', [HomeController::class, 'addToWishlist'])->name('AddToWishlist');
        Route::get('remove/from/wishlist/{slug}', [HomeController::class, 'removeFromWishlist'])->name('removeFromWishlist');
        Route::get('checkout', [CheckoutController::class, 'checkout'])->name('Checkout');
        Route::post('apply/coupon', [CheckoutController::class, 'applyCoupon'])->name('ApplyCoupon');
        Route::post('district/wise/thana', [CheckoutController::class, 'districtWiseThana'])->name('DistrictWiseThana');
        Route::post('change/delivery/method', [CheckoutController::class, 'changeDeliveryMethod'])->name('ChangeDeliveryMethod');
        Route::post('place/order', [CheckoutController::class, 'placeOrder'])->name('PlaceOrder');
        Route::get('order/{slug}', [CheckoutController::class, 'orderPreview'])->name('OrderPreview');

        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/my/orders', [UserDashboardController::class, 'userDashboard'])->name('UserDashboard');
        Route::get('/order/details/{slug}', [UserDashboardController::class, 'orderDetails'])->name('OrderDetails');
        Route::get('/track/my/order/{order_no}', [UserDashboardController::class, 'trackMyOrder'])->name('TrackMyOrder');
        Route::get('/my/wishlists', [UserDashboardController::class, 'myWishlists'])->name('MyWishlists');
        Route::get('/my/payments', [UserDashboardController::class, 'myPayments'])->name('MyPayments');
        Route::get('/clear/all/wishlist', [UserDashboardController::class, 'clearAllWishlist'])->name('clearAllWishlist');
        Route::get('/promo/coupons', [UserDashboardController::class, 'promoCoupons'])->name('PromoCoupons');
        Route::get('/change/password', [UserDashboardController::class, 'changePassword'])->name('ChangePassword');
        Route::post('/update/password', [UserDashboardController::class, 'updatePassword'])->name('UpdatePassword');
        Route::get('/product/reviews', [UserDashboardController::class, 'productReviews'])->name('productReviews');
        Route::get('/delete/product/review/{id}', [UserDashboardController::class, 'deleteProductReview'])->name('DeleteProductReview');
        Route::post('/update/product/review', [UserDashboardController::class, 'updateProductReview'])->name('UpdateProductReview');
        Route::get('/manage/profile', [UserDashboardController::class, 'manageProfile'])->name('ManageProfile');
        Route::get('/remove/user/image', [UserDashboardController::class, 'removeUserImage'])->name('RemoveUserImage');
        Route::get('/unlink/google/account', [UserDashboardController::class, 'unlinkGoogleAccount'])->name('UnlinkGoogleAccount');
        Route::post('/update/profile', [UserDashboardController::class, 'updateProfile'])->name('UpdateProfile');
        Route::post('/send/otp/profile', [UserDashboardController::class, 'sendOtpProfile'])->name('SendOtpProfile');
        Route::post('/verify/sent/otp', [UserDashboardController::class, 'verifySentOtp'])->name('VerifySentOtp');
        Route::get('/user/address', [UserDashboardController::class, 'userAddress'])->name('UserAddress');
        Route::post('/save/user/address', [UserDashboardController::class, 'saveUserAddress'])->name('SaveUserAddress');
        Route::get('/remove/user/address/{slug}', [UserDashboardController::class, 'removeUserAddress'])->name('RemoveUserAddress');
        Route::post('/update/user/address', [UserDashboardController::class, 'updateUserAddress'])->name('UpdateUserAddress');

        Route::get('/support/tickets', [SupportTicketController::class, 'supportTickets'])->name('SupportTickets');
        Route::get('/create/ticket', [SupportTicketController::class, 'createTicket'])->name('createTicket');
        Route::post('/save/support/ticket', [SupportTicketController::class, 'saveSupportTicket'])->name('SaveSupportTicket');
        Route::get('/support/ticket/message/{slug}', [SupportTicketController::class, 'supportTicketMessage'])->name('SupportTicketMessage');
        Route::post('send/support/message', [SupportTicketController::class, 'sendSupportMessage'])->name('SendSupportMessage');

    });

});
