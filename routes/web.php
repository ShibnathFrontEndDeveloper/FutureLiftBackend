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
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\SessionSubscriptionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\BlogController;


Route::get('/',[HomeController::class , 'indexHome']);

Route::get('login/facebook',[AuthController::class ,'redirectToFacebook'])->middleware('userLoginCheck');
Route::get('login/facebook/callback', [AuthController::class ,'handleFacebookCallback'])->middleware('userLoginCheck');
Route::get('login/google',[AuthController::class ,'redirectToGoogle'])->middleware('userLoginCheck');
Route::get('login/google/callback',[AuthController::class ,'handleGoogleCallback'])->middleware('userLoginCheck');
Route::get('/login-signup',[AuthController::class , 'indexAuth'])->middleware('userLoginCheck');
Route::post('/user/signup',[AuthController::class , 'signupFunction'])->middleware('userLoginCheck');
Route::post('/user/login',[AuthController::class , 'loginFunction'])->middleware('userLoginCheck');
Route::get('/refer-user/{code}',[ReferController::class , 'referCodeFunction']);
Route::get('/forget-password',[HomeController::class , 'indexForgetPassword']);
Route::post('/forgetPasswordSubmit',[HomeController::class , 'forgetPasswordSubmitFun']);
Route::get('/password-set/{id}/{link}/{linkT}',[HomeController::class , 'passwordSetFun']);
Route::post('/setResetPassword',[HomeController::class , 'setResetPasswordFun']);
Route::post('/user/demo-registration',[HomeController::class , 'demoRegistration'])->middleware('userLoginCheck');
Route::post('/user/booksession',[HomeController::class , 'booksessionFunction']);
Route::group(['middleware' => 'userAuth'], function () {
    Route::get('/user/logout',[AuthController::class , 'logoutFunction']);
    Route::get('/user-dashboard',[DashboardController::class , 'indexDashboard']);
    Route::post('/payment-callback',[HomeController::class , 'paymentCallbackFunction']);
    Route::get('/user-profile',[ProfileController::class , 'indexProfile']);
    Route::post('/user/personalInformationSave',[ProfileController::class , 'personalInfoSaveFunction']);
    Route::get('/refer-and-earn',[ReferController::class , 'indexRefer']);
    Route::post('/user/send-refer-mail',[ReferController::class , 'referMailSend']);
    Route::post('/user/step-one-submit',[ProfileController::class , 'stepOneSubmitFunction']);
    Route::post('/user/step-two-submit',[ProfileController::class , 'stepTwoSubmitFunction']);
    Route::post('/user/step-three-submit',[ProfileController::class , 'stepThreeSubmitFunction']);
    Route::get('/price',[PriceController::class , 'indexPrice']);
    Route::get('/user/subscription-submit/{subId}',[SubscriptionController::class , 'subscriptionSubmitFunction']);
    Route::get('/session',[SessionController::class , 'indexSession']);
    Route::post('/user/bookCareerSession',[SessionController::class , 'bookCareerSessionFun']);
    Route::get('/help',[HomeController::class , 'indexHelp']);
    Route::post('/updatePhoneNumber',[ProfileController::class , 'updatePhoneNumberFun']);
    Route::get('/change-password',[AuthController::class , 'indexChangePassword']);
    Route::post('/user/updatePassword',[AuthController::class , 'updatePasswordFun']);
    Route::get('/notification',[HomeController::class , 'indexUserNotification']);
    Route::get('/test',[HomeController::class , 'indextest']);
});

Route::get('/eight-ten-counselling',[HomeController::class , 'indexEightTenCoun']);
Route::get('/ten-twelve-counselling',[HomeController::class , 'indexTenTwelveCoun']);
Route::get('/college-graduate-counselling',[HomeController::class , 'indexCollegeGraduateCoun']);
Route::get('/personality-test',[HomeController::class , 'indexPersonalityTestCoun']);
Route::get('/interest-test',[HomeController::class , 'indexInterestTestCoun']);
Route::get('/iq-test',[HomeController::class , 'indexIqTestCoun']);
Route::get('/aptitude-test',[HomeController::class , 'indexAptitudeTestCoun']);
Route::get('/terms-condition',[HomeController::class , 'indexTermsCondition']);
Route::get('/policy',[HomeController::class , 'indexPolicy']);
Route::get('/about',[HomeController::class , 'indexAbout']);
Route::post('/submitHelpForm',[HomeController::class , 'submitHelpFormFun']);
Route::post('/submitQueryForm',[HomeController::class , 'submitQueryFormFun']);
Route::post('/subscribeSubmit',[HomeController::class , 'subscribeSubmitFun']);
Route::get('/blog',[HomeController::class , 'indexBlog']);
Route::get('/blog-details/{slug}',[HomeController::class , 'indexBlogDetails']);
Route::get('/blog-search',[HomeController::class , 'indexBlogSearch']);
Route::get('/blog/blog-tag/{slug}',[HomeController::class , 'indexBlogTagSearch']);
Route::get('/blog/blog-category/{slug}',[HomeController::class , 'indexBlogCategorySearch']);
Route::get('/blogLike/{id}',[HomeController::class , 'blogLikeFun']);
Route::get('/blogDislike/{id}',[HomeController::class , 'blogDislikeFun']);
Route::get('/career-library',[HomeController::class , 'careerLibraryIndex']);
Route::get('/career-library-details',[HomeController::class , 'careerLibraryDetailsIndex']);
Route::get('/instant-advice',[HomeController::class , 'InstantAdviceIndex']);




////////////////////////////////// ADMIN ROUTE ////////////////////////////////////////////

Route::get('/admin/login',[LoginController::class , 'adminLoginIndex'])->middleware('adminLoginCheck');
Route::post('/admin/adminLogin',[LoginController::class , 'submitLogin'])->middleware('adminLoginCheck');
Route::get('/admin/404',[LoginController::class , 'index404']);
Route::get('/admin/forget-password',[LoginController::class , 'adminForgetPasswordIndex'])->middleware('adminLoginCheck');
Route::post('/admin/submitForgetPasswordAdmin',[LoginController::class , 'submitForgetPasswordAdminFun']);
Route::get('/admin/new-password-set/{id}/{link}/{linkT}',[LoginController::class , 'adminNewPasswordIndex'])->middleware('adminLoginCheck');
Route::post('/admin/newPasswordSubmitAdmin',[LoginController::class , 'newPasswordSubmitAdminFun']);
Route::post('ckeditor/upload', [MainController::class, 'uploadCkeditor'])->name('ckeditor.upload');
Route::group(['prefix' => 'admin','middleware' => 'adminAuth'], function () {
    Route::get('/logout',[LoginController::class , 'adminLogout']);
    Route::get('/admin-dashboard',[AdminDashboardController::class , 'dashboardIndex']);
    Route::get('/user/{show}',[UserController::class , 'indexUser'])->name('userlistedit')->middleware('adminUrlCheck');
    Route::post('/userAdd',[UserController::class , 'userAddFun']);
    Route::get('/user/{show}/{id}',[UserController::class , 'indexUserEdit'])->name('userEdit')->middleware('adminUrlCheck');
    Route::post('/userEdit',[UserController::class , 'userEditFun']);
    Route::get('/book-session/{show}',[MainController::class , 'indexBookSession'])->name('booksessionAddEdit')->middleware('adminUrlCheck');
    Route::get('/counselling-session/{show}',[MainController::class , 'indexCounsellingSession'])->name('counsellingSession')->middleware('adminUrlCheck');
    Route::get('/mark-done/{id}/{userId}/{package_id}',[MainController::class , 'markDoneCounselling']);
    Route::post('/session-complete',[MainController::class , 'sessionCompleteFun']);
    Route::get('/user-details/{show}/{id}',[MainController::class , 'indexUserDetails'])->name('userDetails')->middleware('adminUrlCheck');
    Route::get('/faq/{show}',[FaqController::class , 'indexFaq'])->name('faqAddList')->middleware('adminUrlCheck');
    Route::post('/faqAdd',[FaqController::class , 'faqAddFun']);
    Route::get('/faq/{show}/{id}',[FaqController::class , 'indexFaqEdit'])->name('faqEdit')->middleware('adminUrlCheck');
    Route::post('/faqEdit',[FaqController::class , 'faqEditFun']);
    Route::get('/faqDelete/{id}',[FaqController::class , 'faqDeleteFun'])->name('faqDelete')->middleware('adminUrlCheck');
    Route::get('/testimonial/{show}',[TestimonialController::class , 'indexTestimonial'])->name('testimonialAddList')->middleware('adminUrlCheck');
    Route::post('/testimonialAdd',[TestimonialController::class , 'testimonialAddFun']);
    Route::get('/testimonial/{show}/{id}',[TestimonialController::class , 'indexTestimonialEdit'])->name('testimonialEdit')->middleware('adminUrlCheck');
    Route::post('/testimonialEdit',[TestimonialController::class , 'testimonialEditFun']);
    Route::get('/testimonialDelete/{id}',[TestimonialController::class , 'testimonialDeleteFun'])->name('testimonialDelete')->middleware('adminUrlCheck');
    Route::get('/subscription-package/{show}',[SessionSubscriptionController::class , 'indexSubscriptionPackage'])->name('subscriptionPackageAddList')->middleware('adminUrlCheck');
    Route::post('/subscriptionPackageAdd',[SessionSubscriptionController::class , 'subscriptionPackageAddFun']);
    Route::get('/subscription-package/{show}/{id}',[SessionSubscriptionController::class , 'indexSubscriptionPackageEdit'])->name('subscriptionPackageEdit')->middleware('adminUrlCheck');
    Route::post('/subscriptionPackageEdit',[SessionSubscriptionController::class , 'subscriptionPackageEditFun']);
    Route::get('/role/{show}',[RoleController::class , 'indexRole'])->name('roleAddList')->middleware('adminUrlCheck');
    Route::post('/roleAdd',[RoleController::class , 'roleAddFun']);
    Route::get('/role/{show}/{id}',[RoleController::class , 'indexRoleEdit'])->name('roleEdit')->middleware('adminUrlCheck');
    Route::post('/roleEdit',[RoleController::class , 'roleEditFun']);
    Route::get('/menu-access/{show}/{id}',[RoleController::class , 'indexMenuAccess'])->name('roleMenuAccess')->middleware('adminUrlCheck');
    Route::post('/role-wise-menu-access',[RoleController::class , 'roleWiseMenuAccess']);
    Route::get('/change-password/{show}',[LoginController::class , 'adminChangePasswordIndex']);
    Route::post('/adminChangePassword',[LoginController::class , 'adminChangePasswordFun']);
    Route::get('/form/{show}',[MainController::class , 'formIndex'])->name('siteForms')->middleware('adminUrlCheck');
    Route::get('/deleteQueryForm/{id}',[MainController::class , 'deleteQueryFormFun']);
    Route::get('/deleteHelpForm/{id}',[MainController::class , 'deleteHelpFormFun']);
    Route::get('/subscribe-email/{show}',[MainController::class , 'subscribeEmailIndex'])->name('subscribeEmail')->middleware('adminUrlCheck');
    Route::get('/subscribeEmailDelete/{id}',[MainController::class , 'subscribeEmailDeleteFun']);
    Route::get('/blog-category/{show}',[BlogController::class , 'indexBlogCategory'])->name('blogCategory')->middleware('adminUrlCheck');
    Route::post('/blogCategoryAdd',[BlogController::class , 'blogCategoryAddFun'])->name('blogCategoryAdd')->middleware('adminUrlCheck');
    Route::get('/blog-category/{show}/{id}',[BlogController::class , 'indexBlogCategoryEdit'])->name('blogCategoryEdit')->middleware('adminUrlCheck');
    Route::post('/blogCategoryEdit',[BlogController::class , 'blogCategoryEditFun']);
    Route::get('/blogCategoryDelete/{id}',[BlogController::class , 'blogCategoryDeleteFun'])->name('blogCategoryDelete')->middleware('adminUrlCheck');
    Route::get('/blog-section/{show}',[BlogController::class , 'indexBlogSection'])->name('blogSection')->middleware('adminUrlCheck');
    Route::post('/blogAdd',[BlogController::class , 'blogAddFun'])->name('blogSectionAdd')->middleware('adminUrlCheck');
    Route::get('/blog-section/{show}/{id}',[BlogController::class , 'indexBlogSectionEdit'])->name('blogSectionEdit')->middleware('adminUrlCheck');
    Route::post('/blogEdit',[BlogController::class , 'blogEditFun']);
    Route::get('/blogDelete/{id}',[BlogController::class , 'blogDeleteFun'])->name('blogSectionDelete')->middleware('adminUrlCheck');
});


