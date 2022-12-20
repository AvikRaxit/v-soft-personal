<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminContrller;


Route::get('/clear-cache', function () {
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('view:cache');
    \Artisan::call('view:clear');
    return back();
});


Route::get('/', function () {
    return view('welcome');
});

/*------------------Admin Route-------------------- */
Route::prefix('vSoft')->group(function () {
    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('viewLogin')->middleware('IsLogin');
    
    Route::get('reset-password', function () {
        return view('admin.auth.forgot_password');
    })->name('viewResetPassword');

    Route::post('storeLogin', [AdminContrller::class, 'storeLogin'])->name('storeLogin');
    Route::get('logout', [AdminContrller::class, 'logout'])->name('logout');
});

Route::middleware(['IsNotLogin'])->group(function () {
    Route::get('dashboard', [AdminContrller::class, 'dashboard'])->name('dashboard');
    Route::get('user', function () {
        return "User Management";
    });
});