<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminContrller;



Route::get('/', function () {
    return view('welcome');
});

/*------------------Admin Route-------------------- */
Route::prefix('v-soft')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    })->name('viewLogin');
    
    Route::get('reset-password', function () {
        return view('admin.auth.forgot_password');
    })->name('viewResetPassword');

    Route::post('storeLogin', [AdminContrller::class, 'storeLogin'])->name('storeLogin');
    Route::get('logout', [AdminContrller::class, 'logout'])->name('logout');
    Route::get('dashboard', [AdminContrller::class, 'dashboard'])->name('dashboard');
});
