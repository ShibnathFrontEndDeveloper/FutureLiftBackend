<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\ProfileController;



Route::get('/',[HomeController::class , 'indexHome']);
Route::get('/login-signup',[AuthController::class , 'indexAuth']);
Route::post('/user/signup',[AuthController::class , 'signupFunction']);
Route::post('/user/login',[AuthController::class , 'loginFunction']);
Route::get('/user/logout',[AuthController::class , 'logoutFunction']);

Route::get('/user-dashboard',[DashboardController::class , 'indexDashboard']);
Route::post('/user/demo-registration',[HomeController::class , 'demoRegistration']);
Route::post('/user/booksession',[HomeController::class , 'booksessionFunction']);
Route::post('/payment-callback',[HomeController::class , 'paymentCallbackFunction']);
Route::get('/user-profile',[ProfileController::class , 'indexProfile']);
Route::post('/user/personalInformationSave',[ProfileController::class , 'personalInfoSaveFunction']);

