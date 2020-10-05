<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadbuktiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/admin', [ AdminController::class, "index_view" ])->name('admin');
    Route::view('/admin/new', "pages2.admin.admin-new")->name('admin.new');
    Route::view('/admin/edit/{adminId}', "pages2.admin.admin-edit")->name('admin.edit');
});

//buat login admin
Route::get('/dashboard/admin', function(){
    return view("login_admin");
});
Route::post('/admin/login', [ AdminController::class, "handleLogin" ]);

//buat upload bukti bayar
Route::get('/upload', [ UploadbuktiController::class, "upload" ]);
Route::post('/upload/proses', [ UploadbuktiController::class, "proses_upload" ]);