<?php
//////////////////// USER CONTROLLER ///////////////////

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\ReferController;
use App\Http\Controllers\user\PriceController;
use App\Http\Controllers\user\SubscriptionController;
use App\Http\Controllers\user\SessionController;

/////////////////// ADMIN CONTROLLER ///////////////////
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\MainController;



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
Route::get('/refer-and-earn',[ReferController::class , 'indexRefer']);
Route::get('/refer-user/{code}',[ReferController::class , 'referCodeFunction']);
Route::post('/user/send-refer-mail',[ReferController::class , 'referMailSend']);
Route::post('/user/step-one-submit',[ProfileController::class , 'stepOneSubmitFunction']);
Route::post('/user/step-two-submit',[ProfileController::class , 'stepTwoSubmitFunction']);
Route::post('/user/step-three-submit',[ProfileController::class , 'stepThreeSubmitFunction']);
Route::get('/price',[PriceController::class , 'indexPrice']);
Route::get('/user/subscription-submit/{subId}',[SubscriptionController::class , 'subscriptionSubmitFunction']);
Route::get('/session',[SessionController::class , 'indexSession']);
Route::post('/user/bookCareerSession',[SessionController::class , 'bookCareerSessionFun']);




////////////////////////////////// ADMIN ROUTE ////////////////////////////////////////////


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login',[LoginController::class , 'adminLoginIndex']);
    Route::get('/logout',[LoginController::class , 'adminLogout']);
    Route::post('/adminLogin',[LoginController::class , 'submitLogin']);
    Route::get('/admin-dashboard',[AdminDashboardController::class , 'dashboardIndex']);
    Route::get('/user/{show}',[UserController::class , 'indexUser']);
    Route::get('/book-session/{show}',[MainController::class , 'indexBookSession']);
    Route::get('/counselling-session/{show}',[MainController::class , 'indexCounsellingSession']);
    Route::get('/mark-done/{id}/{userId}/{package_id}',[MainController::class , 'markDoneCounselling']);
    Route::post('/session-complete',[MainController::class , 'sessionCompleteFun']);
    Route::get('/user-details/{show}/{id}',[MainController::class , 'indexUserDetails']);
});


