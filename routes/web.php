<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminContrller;
use App\Http\Controllers\Admin\DashboardContrller;


Route::get('/home', function () {
    return view('welcome');
});

/*------------------Admin Route start-------------------- */

/* Login Logpout Controller */
Route::prefix('v-soft')->middleware('IsLogin')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    })->name('viewLogin');
    Route::post('storeLogin', [AdminContrller::class, 'storeLogin'])->name('storeLogin');
    Route::get('logout', [AdminContrller::class, 'logout'])->name('logout');
});

/* Reset Password Controller */
Route::get('reset-password', function () {
    return view('admin.auth.forgot_password');
})->name('viewResetPassword');

/* Dashboard Controller */
Route::prefix('dashboard')->middleware(['IsNotLogin'])->group(function () {
    Route::get('clear', [DashboardContrller::class, 'clearCacheAll'])->name('clearAll');
    Route::get('/', [DashboardContrller::class, 'dashboard'])->name('dashboard');
    Route::get('user-management', [DashboardContrller::class, 'manageUser'])->name('manageUser');
});

/*------------------Admin Route end-------------------- */