<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes dành cho quản trị viên (thêm, sửa, xóa)
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    // Quản lý người dùng
    Route::resource('/user', UserController::class);
    Route::get('/phan-vai-tro/{id}', [UserController::class, 'phanvaitro']);
    Route::get('/phan-quyen/{id}', [UserController::class, 'phanquyen']);
    Route::post('/insert_roles/{id}', [UserController::class, 'insert_roles']);
    Route::post('/insert_permission/{id}', [UserController::class, 'insert_permission']);
    Route::post('/insert-permission', [UserController::class, 'insert_per_permission']);
    
    // Quản lý danh mục, truyện, chapter
    Route::resource('/danhmuc', DanhmucController::class);
    Route::resource('/truyen', TruyenController::class);
    Route::resource('/chapter', ChapterController::class);
});

// Routes dành cho người dùng
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/danh-muc/{slug}', [IndexController::class, 'danhmuc']);
Route::get('/xem-chapter/{slug}', [IndexController::class, 'xemchapter']);
Route::get('/xem-truyen/{slug}', [IndexController::class, 'xemtruyen']);
Route::post('/tim-kiem', [IndexController::class, 'timkiem']);
Route::post('/timkiem_ajax', [IndexController::class, 'timkiem_ajax']);

// Route chuyển quyền


// Routes xác thực người dùng
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/impersonate/user/{id}', [UserController::class, 'impersonate'])->name('impersonate');



// Route::resource('/user',UserController::class);
// Route::get('/phan-quyen/{id}',[UserController::class,'phanquyen']);
// Route::post('/insert_roles/{id}',[UserController::class,'insert_roles']);
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::resource('/truyen', TruyenController::class);
//     Route::resource('/chapter', ChapterController::class);