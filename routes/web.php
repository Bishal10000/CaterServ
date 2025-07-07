<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\TestimonialController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::name('frontend.')->group(function() {
    // Home
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Menu
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');

    // About
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // Services & Events
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/events',   [HomeController::class, 'events'])->name('events');

    // Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    // Booking – GET shows form, POST submits it
    Route::get('/book-now',  [HomeController::class, 'showBookingForm'])->name('booking');
    Route::post('/book-now', [HomeController::class, 'storeBooking'])->name('booking.store');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('login',  [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('services',     ServiceController::class);
    Route::resource('menu-items',   MenuItemController::class);
    Route::resource('bookings',     AdminBookingController::class);
    Route::resource('events',       EventController::class);
    Route::resource('team-members', TeamMemberController::class);
    Route::resource('facilities',   FacilityController::class);
    Route::resource('testimonials', TestimonialController::class);

    Route::post('bookings/{booking}/update-status', [AdminBookingController::class, 'updateStatus'])
         ->name('bookings.updateStatus');
});
