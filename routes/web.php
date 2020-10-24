<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadbuktiController;
use App\Http\Controllers\UploadFileLombaController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
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
Route::post('/admin/login', [ AdminController::class, "handleLogin" ])
    ->middleware(['guest']);

//buat upload bukti bayar
Route::get('/uploadbukti', [ UploadbuktiController::class, "upload" ])
    ->middleware(['auth:sanctum', 'verified']);
Route::post('/uploadbukti/proses', [ UploadbuktiController::class, "proses_upload" ]);

//buat upload file gambar lomba
Route::get('/uploadfile', [ UploadFileLombaController::class, "upload" ])
    ->middleware(['auth:sanctum', 'verified']);
Route::post('/uploadfile/proses', [ UploadFileLombaController::class, "proses_upload" ]);
Route::post('/uploadlink/proses', [ UploadFileLombaController::class, "proses_upload_link" ]);

//akses gambar bukti
Route::get('/images/bukti/{file}', [ function ($file) {

    $path = storage_path('app/bukti_pembayaran/'.$file);

    if (file_exists($path)) {

        return response()->file($path, array('Content-Type' =>'image/jpeg'));

    }

    abort(404);

}]);

//akses file lomba
Route::get('/images/filelomba/{file}', [ function ($file) {

    $path = storage_path('app/file_lomba/'.$file);

    if (file_exists($path)) {

        return response()->file($path, array('Content-Type' =>'image/jpeg'));

    }

    abort(404);

}]);

//verifikasi pembayaran
Route::get('/verifypembayaran/{userId}', [ UserController::class, "verify_pembayaran" ])->name('verifikasi_pembayaran');