<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Beranda dan Test Routes
Route::get('/', [HomeController::class, 'Beranda'])->name('get_beranda');
Route::get('/test', [HomeController::class, 'Test'])->name('get_test');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('get_login');
Route::post('/login', [LoginController::class, 'login'])->name('post_login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::get('/register', [UserController::class, 'register'])->name('get_register');
Route::post('/register', [UserController::class, 'store'])->name('post_register');

// Dashboard Routes
Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
Route::get('/dashboard/user', [DashboardController::class, 'user'])->name('dashboard.user');

// Route::get('/profile', [UserController::class, 'profile'])->name('get_profile')->middleware('auth');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboard'])->name('get_dashboard');
//     Route::get('/profile', [UserController::class, 'profile'])->name('get_profile');

//     Route::middleware(['admin'])->group(function () {
//         Route::get('/dashboard/admin', [UserController::class, 'dashboardAdmin'])->name('get_dashboard_admin');
//     });
// });

// Route::post('/login', [AuthController::class, 'login'])->name('post_login');
