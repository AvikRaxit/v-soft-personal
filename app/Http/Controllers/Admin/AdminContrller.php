<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Authentication};
use Hash;

class AdminContrller extends Controller
{
    // View Dashboard
    public function dashboard() {
        $data = Authentication::where('id',session()->get('loginId')->id)->first();
        return view('admin.dashboard', compact('data'));
    }

    // Login sucess or fail
    public function storeLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email or username must be required',
            'password.required' => 'Password must be required',

        ]);
        $admin = Authentication::where('email','=',$request->email)->first();
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                if($admin->role == 1) {
                    $request->session()->put('loginId', $admin);
                    return redirect()->route('dashboard');
                }
                elseif($admin->role == 0) {
                    $request->session()->put('loginId', $admin);
                    return redirect()->route('dashboard');
                }
            }
            else {
                return back()->with('error', 'Wrong email or password ! Please try again');
            }
        }
        else {
            return back()->with('error', 'Email is not exist ! Thank you');
        }
    }

    // Logout profile
    public function logout() {
        session()->forget('loginId');
        return redirect()->route('viewLogin')->with('success', 'Logout is successfull ! Thank you');
    }
}
