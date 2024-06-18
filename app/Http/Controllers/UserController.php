<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function dashboard(){
        return view('dashboard.user');
    }

    public function dashboardAdmin(){
        return view('dashboard.admin');
    }

    public function profile(){
        // $user = Auth::user();
        // return view('profile.index', compact('user'));
        return view('profile.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_hp' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password), // Menggunakan bcrypt untuk meng-hash password
        ]);

        // Auth::login($user);

        return redirect()->route('get_login');
    }

     public function get_profile()
    {
        return view('profile.index'); // Sesuaikan dengan path view profil Anda
    }
}
