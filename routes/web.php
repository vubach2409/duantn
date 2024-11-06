<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\RoomAdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Category;
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

Route::get('admin-main/dashboard', function () {
    return view('admin-main.dashboard');
})->name('admin.dashboard');
Route::get('/admin/welcome', function () {
    return view('auths.welcome');
});

//đăng ký đăng nhập
Route::get('register', [AuthController::class, 'showFormRegister'])->name('auth.register');
Route::post('register', [AuthController::class, 'handleRegister'])->name('auth.register');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('auth.login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('auth.login');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('admin-main/profile', [AuthController::class, 'showProfileAdmin'])->name('admin.profile');
Route::get('admin-main/profile/{user}/edit', [AuthController::class, 'edit'])->name('admin.profile.edit');
Route::put('admin-main/profile/{user}/update', [AuthController::class, 'update'])->name('admin.profile.update');

//quản lý người dùng
Route::get('admin-main/list-landlord', [UserController::class, 'showListLandlord'])->name('admin.user.listLandlord');
Route::get('admin-main/list-renter', [UserController::class, 'showListRenter'])->name('admin.user.listRenter');


//admin chủ trọ
Route::get('admin/service', [ServiceController::class, 'index'])->name('service.list');
Route::get('admin/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('admin/service/create', [ServiceController::class, 'store'])->name('service.store');
Route::get('admin/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('admin/service/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('admin/service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

Route::get('admin/room', [RoomController::class, 'index'])->name('room.list');
Route::get('admin/room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('admin/room/create', [RoomController::class, 'store'])->name('room.store');
Route::get('admin/room/{id}/edit', [RoomController::class, 'edit'])->name('room.edit');
Route::put('admin/room/{id}', [RoomController::class, 'update'])->name('room.update');
Route::delete('admin/room/{id}', [RoomController::class, 'destroy'])->name('room.destroy');
Route::get('admin/service/{id}', [ServiceController::class, 'show'])->name('service.show');



//** guest  */
Route::get('guest/home', [HomeController::class, 'home'])->name('guest.home');

//Bài viết
Route::get('admin/article', [ArticleController::class, 'index'])->name('article.list');
Route::get('admin/article/create', [ArticleController::class, 'create'])->name('article.create');         // Lấy tất cả bài viết
Route::post('admin/article/create', [ArticleController::class, 'store'])->name('article.store');           // Tạo bài viết mới
Route::get('admin/article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');   // Lấy bài viết theo ID
Route::put('admin/article/{id}', [ArticleController::class, 'update'])->name('article.update');      // Cập nhật bài viết
Route::delete('admin/article/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');  // Xóa bài viết



//admin chính
Route::get('admin-main/room', [RoomAdminController::class, 'index'])->name('admin.room.list');
Route::get('admin-main/room/create', [RoomAdminController::class, 'create'])->name('admin.room.create');
Route::post('admin-main/room/create', [RoomAdminController::class, 'store'])->name('admin.room.store');
Route::get('admin-main/room/{id}/edit', [RoomAdminController::class, 'edit'])->name('admin.room.edit');
Route::put('admin-main/room/{id}', [RoomAdminController::class, 'update'])->name('admin.room.update');
Route::delete('admin-main/room/{id}', [RoomAdminController::class, 'destroy'])->name('admin.room.destroy');

Route::get('admin-main/category', [CategoryController::class, 'index'])->name('admin.category.list');
Route::get('admin-main/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin-main/category/create', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin-main/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('admin-main/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('admin-main/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
