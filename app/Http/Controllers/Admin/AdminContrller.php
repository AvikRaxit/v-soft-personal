<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContrller extends Controller
{
    // View Dashboard
    public function dashboard() {
        return view('admin.dashboard');
    }
}