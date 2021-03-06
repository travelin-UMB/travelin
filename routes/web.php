<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
// use App\Http\Controllers\ScrapeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;


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

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Route::resource('travel-package', TravelPackagesController::class);
        Route::resource('user', UserController::class);
        // Route::resource('gallery', GalleryController::class);
        // Route::resource('transaction', TransactionsController::class);
        Route::resource('guest', GuestController::class);
        

        Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
        Route::post('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
        
        Route::get('/reservation/edit/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
        Route::put('/reservation/update/{id}', [ReservationController::class, 'update'])->name('reservation.update');

        Route::delete('/reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    });
Auth::routes(['verify' => true]);

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('featured_destination', [LandingPageController::class, 'city']);
Route::get('our_package/{url}', [LandingPageController::class, 'our_package'])->name('our_package');
Route::get('my_package/{id}', [LandingPageController::class, 'my_package'])->name('my_package');
Route::get('detail/{url}/{url_sub?}', [LandingPageController::class, 'package_detail'])->name('package_detail');
Route::get('detail_my_package/{id}/{url}/{url_sub?}', [LandingPageController::class, 'my_package_detail'])->name('my_package_detail');


// Route::get('/scrape', [ScrapeController::class, 'scrape']);

Route::post('reservation', [ReservationController::class, 'store'])->name('reservation');
Route::post('process_guestbook', [GuestController::class, 'store'])->name('process_guestbook');
Route::post('process_payment', [LandingPageController::class, 'processPayment'])->name('process_payment');
