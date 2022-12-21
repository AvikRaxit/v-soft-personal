<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Authentication};

class DashboardContrller extends Controller
{
    // Clear Cache, Route and Optimize
    public function clearCacheAll() {
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('view:cache');
        \Artisan::call('view:clear');
        \Artisan::call('optimize:clear');

        return back()->with('success', 'Cache Route cleared and optimized successfully !');
    }

    // View Dashboard
    public function dashboard() {
        $data = Authentication::where('id',session()->get('loginId')->id)->first();
        return view('admin.dashboard', compact('data'));
    }

    // Manage User
    public function manageUser() {
        $data = Authentication::where('id',session()->get('loginId')->id)->first();
        return view('admin.user-management',compact('data'));
    }
}
