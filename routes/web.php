<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/welcome', function () {
    return view('admin.auths.welcome');
});

//đăng ký đăng nhập
Route::get('admin/register', [AuthController::class, 'showFormRegister'])->name('auth.register');
Route::post('admin/register', [AuthController::class, 'handleRegister'])->name('auth.register');
Route::get('admin/login', [AuthController::class, 'showFormLogin'])->name('auth.login');
Route::post('admin/login', [AuthController::class, 'handleLogin'])->name('auth.login');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('auth.logout');

//quản lý người dùng
Route::get('admin/list-user', [UserController::class, 'showListUser'])->name('user.list');


