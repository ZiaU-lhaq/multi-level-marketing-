<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PlaystoreController;
use App\Http\Controllers\UserPackageController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::view("/","index");
// auth routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home')
->middleware('is_admin');

//end auth Routes

//package routes
Route::get('packagelist',[PackageController::class,'Package_list'])->middleware('is_admin','auth');
Route::get('savepackage',[PackageController::class,'create_Package'])->middleware('is_admin','auth');
// Route::view("/savepackage","packages/add_package");
Route::post('addpackage',[PackageController::class,'add_package'])->middleware('is_admin','auth');
Route::get('edit-records',[PackageController::class,'Package_list'])->middleware('is_admin','auth');
Route::get('edit/{id}',[PackageController::class,'show_packages'])->middleware('is_admin','auth');
Route::post('edit/{id}',[PackageController::class,'edit_packages'])->middleware('is_admin','auth');
Route::get('delete/{id}',[PackageController::class,'delete_packages'])->middleware('is_admin','auth');
// end package routes

//app routes
Route::get('applist',[PlaystoreController::class,'app_list'])->middleware('is_admin','auth');
Route::get('saveapp',[PlaystoreController::class,'create_app'])->middleware('is_admin','auth');
// Route::view("/saveapp","apps/add_app");
Route::post('addapp',[PlaystoreController::class,'add_app'])->middleware('is_admin','auth');
Route::get('edit-records',[PlaystoreController::class,'app_list'])->middleware('is_admin','auth');
Route::get('edit/{id}',[PlaystoreController::class,'show_apps'])->middleware('is_admin','auth');
Route::post('edit/{id}',[PlaystoreController::class,'edit_apps'])->middleware('is_admin','auth');
Route::get('delete/{id}',[PlaystoreController::class,'delete_apps'])->middleware('is_admin','auth');
// end app routes


//video routes
Route::get('videolist',[videoController::class,'video_list'])->middleware('is_admin','auth');
Route::get('savevideo',[videoController::class,'create_video'])->middleware('is_admin','auth');
// Route::view("/savevideo","videos/add_video");
Route::post('addvideo',[videoController::class,'add_video'])->middleware('is_admin','auth');
Route::get('edit-records',[videoController::class,'video_list'])->middleware('is_admin','auth');
Route::get('edit/{id}',[videoController::class,'show_videos'])->middleware('is_admin','auth');
Route::post('edit/{id}',[videoController::class,'edit_videos'])->middleware('is_admin','auth');
Route::get('delete/{id}',[videoController::class,'delete_videos'])->middleware('is_admin','auth');
// end video routes

// users routes 
Route::get('userlist',[userController::class,'user_list'])->middleware('is_admin','auth');
Route::view("/saveuser","users/add_user")->middleware('is_admin','auth');
Route::post('adduser',[userController::class,'add_user'])->middleware('is_admin','auth');
Route::get('edit_user',[userController::class,'user_list'])->middleware('is_admin','auth');
Route::get('edit_user/{id}',[userController::class,'show_users'])->middleware('is_admin','auth');
Route::post('edit_user/{id}',[userController::class,'edit_users'])->middleware('is_admin','auth');
Route::get('delete_user/{id}',[userController::class,'delete_users'])->middleware('is_admin','auth');
// end users routes 

// admin Routes
Route::get('adminlist',[AdminController::class,'admin_list'])->middleware('is_admin','auth');
Route::view("/saveadmin","admins/add_admin")->middleware('is_admin','auth');
Route::post('addadmin',[AdminController::class,'add_admin'])->middleware('is_admin','auth');
Route::get('edit-admin',[AdminController::class,'admin_list'])->middleware('is_admin','auth');
Route::get('edit_admin/{id}',[AdminController::class,'show_admins'])->middleware('is_admin','auth');
Route::post('edit_admin/{id}',[AdminController::class,'edit_admins'])->middleware('is_admin','auth');
Route::get('delete_admin/{id}',[AdminController::class,'delete_admins'])->middleware('is_admin','auth');
//end admin Routes


//user package routes
Route::get('packagelistusers',[UserPackageController::class,'Package_list_user'])->middleware('auth');
Route::get('notallowed',[UserPackageController::class,'not_allowed'])->middleware('auth');
Route::get('paymentform',[UserPackageController::class,'payment_form'])->middleware('auth');
// end user package routes

//stripe
// Route::get('checkout','CheckoutController@checkout');
Route::get('checkout',[CheckoutController::class,'checkout'])->middleware('auth');
Route::post('checkout',[CheckoutController::class,'afterpayment'])->name('checkout.credit-card')->middleware('auth');
// Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');
//end stripe

//transaction controller
Route::get('transactionlist',[TransactionController::class,'transaction_list'])->middleware('auth');
Route::get('transactionlistuser',[TransactionController::class,'transaction_list_user'])->middleware('auth');
// Route::view("/transactionform",'user_packages/transactions_form');
Route::get('transactionform',[TransactionController::class,'show_transactions_form'])->middleware('auth');
Route::post('addtransection',[TransactionController::class,'add_transaction'])->middleware('auth');
//end transaction controller

//user  profile pages
// if (auth()->user()->is_admin==1) {
//     //         return $next($request);
//     //  }else {
//         //      return redirect('home')->with('error','you can not access to this page');
//         //     }
        Route::view("/userprofile","user_packages/user_profile")->middleware('auth');
        Route::view("/adminprofile","admins/admin_profile")->middleware('is_admin','auth');
//end user  profile

//  users videos and play store route
Route::view("/watchvideo","user_packages/watch_video")->middleware('auth','is_approved');
Route::get('/applistuser',[Userpackagecontroller::class,'app_list_user'])->middleware('auth');
Route::get('/videolistuser',[Userpackagecontroller::class,'video_list_user'])->middleware('auth');
Route::get('/dlc',[Userpackagecontroller::class,'download'])->middleware('auth');
// end users videos and play store route 

//  admin videos and play store route
Route::view("/utube","playstore_utube/utube")->middleware('auth','is_admin');
Route::view("/playstore","playstore_utube/playstore")->middleware('auth','is_admin');
// end admin videos and play store route 

//captcha
Route::get('/Captcha', [CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);
//captcha
