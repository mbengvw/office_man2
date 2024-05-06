<?php

use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebcamController;
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

Route::get('/', [PelayananController::class, 'index'])->name('pelayanan.index');
Route::post('store_kuisioner', [PelayananController::class, 'store_kuisioner'])->name('pelayanan.store_kuisioner');
Route::post('store_buku_tamu', [PelayananController::class, 'store_buku_tamu'])->name('pelayanan.store_buku_tamu');



Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/validate_login', [LoginController::class, 'validate_login'])->name('login.validate_login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login/registration', [LoginController::class, 'registration'])->name('login.registration');
Route::post('/login/validate_registration', [LoginController::class, 'validate_registration'])->name('login.validate_registration');


Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('admin/buku-tamu', [BukuTamuController::class, 'index'])->name('buku-tamu.index')->middleware('auth');
Route::get('admin/list-buku-tamu', [BukuTamuController::class, 'list_all'])->name('buku-tamu.list_all')->middleware('auth');
Route::post('admin/buku-tamu/update', [BukuTamuController::class, 'update_status'])->name('buku-tamu.update_status')->middleware('auth');
Route::get('admin/kuisioner', [KuisionerController::class, 'index'])->name('kuisioner.index')->middleware('auth');
Route::get('admin/list-kuisioner', [KuisionerController::class, 'list_all'])->name('kuisioner.list_all')->middleware('auth');

Route::get('admin/test', [KuisionerController::class, 'test'])->name('admin.test');
Route::get('admin/test2', [BukuTamuController::class, 'test'])->name('admin.test');


Route::get('webcam', [WebcamController::class, 'index']);
Route::post('webcam', [WebcamController::class, 'store'])->name('webcam.capture');