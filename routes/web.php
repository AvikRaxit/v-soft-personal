<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminContrller;



Route::get('/', function () {
    return view('welcome');
});

/*------------------Admin Route-------------------- */
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    });
    Route::get('dashboard', [AdminContrller::class, 'dashboard'])->name('dashboard');
});
