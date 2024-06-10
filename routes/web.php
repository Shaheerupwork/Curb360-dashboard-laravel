<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\adminController;
// auth controllers 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Auth;
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

Route::get('add_addons', [WebsiteController::class, 'add_addons'])->name('add_addons');
Route::get('coupons', [WebsiteController::class, 'coupons'])->name('coupons');
Route::get('packages', [WebsiteController::class, 'packages'])->name('packages');
Route::get('packagessetting', [WebsiteController::class, 'packagessetting'])->name('packagessetting');
Route::get('services', [WebsiteController::class, 'services'])->name('services');
Route::get('setting', [WebsiteController::class, 'setting'])->name('setting');
Route::get('timesetting', [WebsiteController::class, 'timesetting'])->name('timesetting');
Route::get('zones', [WebsiteController::class, 'zones'])->name('zones');


Auth::routes();
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::middleware(['auth.check'])->group(function () {
    Route::get('/', 'WebsiteController@index');
    // Add more routes here which you want to protect
});

// Public routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');