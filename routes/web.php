<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;

Auth::routes();


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('Index');
Route::get('/otc', [App\Http\Controllers\FrontendController::class, 'otc'])->name('Otc');
Route::get('/category/{slug}', [App\Http\Controllers\FrontendController::class, 'categoryWiseProducts'])->name('CategoryWiseProducts');
Route::get('/nursing/service/request', [App\Http\Controllers\FrontendController::class, 'nursingService'])->name('NursingService');
Route::get('/doctors', [App\Http\Controllers\FrontendController::class, 'doctors'])->name('Doctors');
Route::get('/doctor/details/{slug}', [App\Http\Controllers\FrontendController::class, 'doctorDetails'])->name('DoctorDetails');
Route::get('/upload/prescription', [App\Http\Controllers\FrontendController::class, 'uploadPrescription'])->name('UploadPrescription');
Route::get('/disease/wise/medicine/{slug}', [App\Http\Controllers\FrontendController::class, 'diseaseWiseMedicine'])->name('DiseaseWiseMedicine');
Route::get('/product/details/{slug}', [App\Http\Controllers\FrontendController::class, 'productDetails'])->name('ProductDetails');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
