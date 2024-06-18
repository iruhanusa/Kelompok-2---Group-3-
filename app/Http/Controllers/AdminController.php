<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('auth.admin_login');
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] == 'admin' && $credentials['password'] == 'admin') {
            $admin = \App\Models\User::where('email', 'admin@example.com')->first();
            if ($admin && $admin->hasRole('admin')) {
                Auth::login($admin);
                return redirect()->route('dashboard.admin');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid admin credentials.']);
    }
}
