<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BazarController;
use App\Http\Controllers\ChangeProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Template\TestingController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UpdateProfilController;
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
// Route::get('/change-profil', function () {
//     return view('Data.change-profil');
// });
// Route::get('change-profil/edit',[ChangeProfilController::class, 'index'])->name('change-profil.edit');
//     Route::put('change-profil/edit', [ChangeProfilController::class, 'update']);




//reset password in login form
Route::get('/reset-password', function () {
    return view('Data.reset-password');
});
Route::get('reset-password/edit',[ResetPasswordController::class, 'index'])->name('reset-password.edit');
    Route::put('reset-password/edit', [ResetPasswordController::class, 'update']);

//login
Route::get('/login', function () {
    return view('Data.login');
})->name('login');
Route::post('/postLogin', [LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::group(['middleware' => ['auth','adminlevel:Super Admin']], function (){
    Route::get('dashboard', [DashboardController::class ,'index']);

    //data bazar
    Route::get('/data-bazar',[BazarController::class , 'index'])->name('dataBazar');
    Route::get('/bazar-edit/{id}', [BazarController::class , 'edit'])->name('bazar.edit');
    Route::prefix('data-bazar/')->group(function (){
        Route::post('store',[BazarController::class , 'store'])->name('readData.bazar');
        Route::post('/update/{id}', [BazarController::class, 'update'])->name('bazar.update');
        Route::get('delete/{id}', [BazarController::class, 'deleteData'])->name('deleteData.bazar');
    });

    //data admin
    Route::get('/data-admin',[AdminController::class, 'index']);
    Route::get('/admin-edit/{id}', [AdminController::class , 'edit'])->name('admin.edit');
    Route::prefix('data-admin/')->group(function (){
        Route::post('store',[AdminController::class , 'store'])->name('readData.admin');
        Route::post('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::get('delete/{id}', [AdminController::class, 'deleteData'])->name('deleteData.admin');
    });


});

Route::group(['middleware' => ['auth','adminlevel:Super Admin,Admin']], function (){
    Route::get('dashboard', [DashboardController::class ,'index']);

    Route::get('/cetak-pesanan',[PesanController::class , 'cetakPesanan'])->name('cetak-pesanan');
    //data pesanan
        Route::get('/pesanan',[PesanController::class , 'readDataa'])->name('dataPesanan');
        Route::get('/pesanan-edit/{id}', [PesanController::class , 'edit'])->name('pesan.edit');
        Route::prefix('pesanan/')->group(function(){
            Route::get('/pesanan',[PesanController::class , 'readDataa'])->name('dataPesanan');

            Route::post('/update/{id}', [PesanController::class, 'update'])->name('pesan.update');
            Route::get('delete/{id}', [PesanController::class, 'deleteDataa'])->name('deleteData.pesanan');
            Route::get('/delete', [PesanController::class, 'deleteAll'])->name('deleteAll.pesanan');
    });

    //change password in profil
    Route::get('/change-password', function () {
        return view('Data.change-password');
    });
    Route::get('change-password/edit',[UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::put('change-password/edit', [UpdatePasswordController::class, 'update']);
});


// route templete
// Route::get('/profil', [ProfilController::class, 'profil']);
// Route::get('/admin',[TestingController::class , 'index'])->name('dashboardAdmin');

// Route::get('/bazar', function() {
//     return view('frondend.index');
// });







//route frondend
Route::get('/',[HomeController::class, 'index'])->name('index.index');
Route::get('pesan/{id}',[detailController::class, 'index'])->name('detail.index');
Route::post('pesan/{id}',[detailController::class, 'pesan']);
