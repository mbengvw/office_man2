<?php

use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuTamuController;

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

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('admin/buku-tamu', [BukuTamuController::class, 'index'])->name('buku-tamu.index');
Route::get('admin/list-buku-tamu', [BukuTamuController::class, 'list_all'])->name('buku-tamu.list_all');
