<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UploadbuktiController;
use App\Http\Controllers\UploadFileLombaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UMKMController;
use App\Models\umkm;
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


Route::get('/', [ UMKMController::class, "indexlanding" ]);

//akses dashboard admin, harus pake admin ya hehehe
Route::group([ "middleware" => ['auth:admins', 'verified'] ], function () {
    Route::view('/admin/dashboard', "dashboard")->name('admin.dashboard');
    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::get('/member', [ MemberController::class, "index_view" ])->name('member');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
    Route::post('/admin/verify/{id}', [ UserController::class, "verify_pembayaran" ]);

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
});

//buat login admin
Route::get('/admin/login', function () {
    return view("login_admin");
})->name('admin.login');
Route::post('/admin/login', [ AdminController::class, "handleLogin" ])
    ->middleware(['guest']);

// buat upload file gambar lomba
Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function () {
    //buat upload bukti bayar
    Route::get('/tim/uploadbukti', [ UploadbuktiController::class, "upload" ]);
    Route::post('/tim/uploadbukti', [ UploadbuktiController::class, "proses_upload" ]);

    //buat upload file lomba
    Route::get('/tim/uploadkarya', [ UploadFileLombaController::class, "upload" ]);
    Route::post('/tim/uploadkarya', [ UploadFileLombaController::class, "proses_upload" ]);
    Route::post('/tim/uploadlink/proses', [ UploadFileLombaController::class, "proses_upload_link" ]);

    //update detail tim
    Route::get('/tim/update', [ UserController::class, "show_account"]);
    Route::post('/tim/update', [ UserController::class, "updateUser"]);
    
    //member tim
    Route::get('/tim/member', function () {
        return view("dashboard_peserta.member");
    });
    Route::get('/tim/member', [ UserController::class, "show_member"]);
    Route::post('/tim/member', [ UserController::class, "updateMember"]);
});

//artstep
Route::get('/galeri', function () {
    return view("artstep");
});

//buat register
Route::post('/register', [ RegisterController::class, "validator" ])
    ->middleware(['guest']);

//buat creative market
Route::get('/creativemarket', [ UMKMController::class, "index" ]);
Route::get('/creativemarket/{umkm}', [ UMKMController::class, "show" ]);

Route::get('/exhibition', function () {
    return view("virtual_museum");
});

//kategori lomba
Route::view('/kompetisi/arjuna', "kategori.arjuna");
Route::view('/kompetisi/kresna', "kategori.kresna");
Route::view('/kompetisi/nakula', "kategori.nakula");
Route::view('/kompetisi/prahasta', "kategori.prahasta");
Route::view('/kompetisi/sadewa', "kategori.sadewa");

Route::view('/about', "about");
Route::view('/contact', "contact");
Route::view('/webinar', "webinar");
