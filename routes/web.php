<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\totalTemperature;
use App\Http\Controllers\profileController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\VisitorFormController;
use App\Http\Controllers\dataEmployeeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\TemperatureUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/login',[LoginController::class,'halamanLogin'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/visitor/create',[VisitorFormController::class, 'create'])->name('createVisitor');
Route::get('/dataVisitor',[VisitorFormController::class, 'index'])->name('dataVisitor');
Route::post('/visitor/store',[VisitorFormController::class, 'store'])->name('storeVisitor');
Route::get('/visitor/edit/{id}',[VisitorFormController::class, 'edit'])->name('editVisitor');
Route::put('/visitor/update/{id}',[VisitorFormController::class, 'update'])->name('updateVisitor');
Route::get('/visitor/delete/{id}',[VisitorFormController::class, 'destroy'])->name('deleteVisitor');


Route::get('/visitorCheckout',[checkoutController::class, 'index'])->name('visitorCheckout');
//Route::get('/visitorCheckout/create',[checkoutController::class, 'create']);
Route::get('/visitorCheckout/edit/{id}',[checkoutController::class, 'edit']);
Route::post('/visitorCheckout/store',[checkoutController::class, 'storeC']);


Route::get('/temperatureUser',[TemperatureUserController::class,'index'])->name('temperatureUser');
Route::get('/temperatureUser/create',[TemperatureUserController::class, 'create']);
Route::post('/temperatureUser/store',[TemperatureUserController::class, 'store']);

  
Route::get('/temperatureTracking',[TemperatureController::class,'index'])->name('temperature');
Route::get('/temperature/create',[TemperatureController::class, 'create'])->name('createTemperature');
Route::post('/temperature/store',[TemperatureController::class, 'store']);
Route::get('/temperature/edit/{id}',[TemperatureController::class, 'edit'])->name('editTemperature');
Route::put('/temperature/update/{id}',[TemperatureController::class, 'update'])->name('updateTemperature');
Route::get('/temperature/delete/{id}',[TemperatureController::class, 'destroy'])->name('deleteTemperature');


Route::get('/changePassword',[HomeController::class,'showChangePasswordForm']);
Route::post('/changePassword',[HomeController::class, 'changePassword'])->name('changePassword');
Route::get('/password', [ChangePasswordController::class, 'index'])->name('changePassword');
Route::post('/password/store', [ChangePasswordController::class, 'store'])->name('savePassword');

Route::get('/dataProfile',[profileController::class,'profile'])->name('dataProfile');


//Route::get('/index',[HomeController::class,'halamanHome'])->name('index');

Route::get('/dataEmployee',[dataEmployeeController::class,'index'])->name('dataEmployee');
Route::get('/employee/create',[dataEmployeeController::class, 'create']);
Route::post('/employee/store',[dataEmployeeController::class, 'store']);
Route::get('/employee/edit/{id}',[dataEmployeeController::class, 'edit'])->name('editEmployee');
Route::put('/employee/update/{id}',[dataEmployeeController::class, 'update'])->name('updateEmployee');
Route::get('/employee/delete/{id}',[dataEmployeeController::class, 'destroy'])->name('deleteEmployee');


//Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/index',[HomeController::class,'halamanHome'])->name('index');
//Route::get('/login',[LoginController::class,'halamanLogin'])->name('login');
