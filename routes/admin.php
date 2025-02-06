<?php

use App\Http\Middleware\CustomAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController as ClientController;
use App\Http\Controllers\Admin\AppointmentController;



Route::group(['prefix' => 'administration'], function() {
    Route::get('/', DashboardController::class)->name('admin.dashboard');
    // Clients routes
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients.index');
    Route::get('/clients/{id}', [ClientController::class, 'show'])->name('admin.clients.show');
    // Services routes
    Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('admin.services.show');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // Booking Calendar
    Route::get('/booking/calendar', [AppointmentController::class, 'calendar'])->name('admin.booking.calendar');
    Route::get('/booking/list', [AppointmentController::class, 'index'])->name('admin.booking.index');
    Route::get('/booking/{id}', [AppointmentController::class, 'show'])->name('admin.booking.show');
    Route::patch('/booking/{id}', [AppointmentController::class, 'changeStatus'])->name('admin.booking.changeStatus');

})->middleware(CustomAuth::class);


