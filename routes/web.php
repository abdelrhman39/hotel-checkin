<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('app');
});

// Admin Login
Route::get('/admin/login', [\App\Http\Controllers\AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [\App\Http\Controllers\AdminAuthController::class, 'login']);
Route::post('/admin/logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard (protected)
Route::get('/admin/dashboard', [\App\Http\Controllers\AdminDashboardController::class, 'index'])->middleware('admin.auth')->name('admin.dashboard');
Route::get('/admin/guests/{id}', [\App\Http\Controllers\AdminDashboardController::class, 'showGuest'])->middleware('admin.auth')->name('admin.guest.show');
Route::post('/admin/guests/{id}/status', [\App\Http\Controllers\AdminDashboardController::class, 'updateGuestStatus'])->middleware('admin.auth')->name('admin.guest.status');
Route::get('/admin/reports', [\App\Http\Controllers\AdminDashboardController::class, 'reports'])->middleware('admin.auth')->name('admin.reports');
Route::get('/admin/guests/{id}/edit', [\App\Http\Controllers\AdminDashboardController::class, 'edit'])->middleware('admin.auth')->name('admin.guest.edit');
Route::post('/admin/guests/{id}/update', [\App\Http\Controllers\AdminDashboardController::class, 'update'])->middleware('admin.auth')->name('admin.guest.update');
Route::delete('/admin/guests/{id}', [\App\Http\Controllers\AdminDashboardController::class, 'destroy'])->middleware('admin.auth')->name('admin.guest.destroy');