<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Authentication};

class DashboardContrller extends Controller
{
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
