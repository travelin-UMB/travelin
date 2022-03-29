<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;


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

// Route::get('/', 'HomeController@index')
//     ->name('home');

// Route::get('/detail/{slug}', 'DetailController@index')
//     ->name('detail');

// Route::post('/checkout/{id}', 'CheckoutController@process')
//     ->name('checkout_process')
//     ->middleware(['auth','verified']);

// Route::get('/checkout/{id}', 'CheckoutController@index')
//     ->name('checkout')
//     ->middleware(['auth','verified']);

// Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
//     ->name('checkout-create')
//     ->middleware(['auth','verified']);

// Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
//     ->name('checkout-remove')
//     ->middleware(['auth','verified']);

// Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
//     ->name('checkout-success')
//     ->middleware(['auth','verified']);


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Route::resource('travel-package', 'TravelPackageController');
        // Route::resource('gallery', 'GalleryController');
        // Route::resource('transaction', 'TransactionController');
    });
Auth::routes(['verify' => true]);

Route::get('/', [LandingPageController::class, 'index']);
Route::get('featured_destination', [LandingPageController::class, 'city']);
Route::get('our_package', [LandingPageController::class, 'our_package']);
Route::get('my_package', [LandingPageController::class, 'my_package']);
Route::get('detail/{city}/{name}/{id}', [LandingPageController::class, 'package_detail'])->name('package_detail');