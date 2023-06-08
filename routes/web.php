<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('pelanggan', \App\Http\Controllers\PelangganController::class)->middleware('auth');
Route::resource('keluhan', \App\Http\Controllers\KeluhanController::class)->middleware('auth');
Route::resource('pembayaran', \App\Http\Controllers\PembayaranController::class)->middleware('auth');
Route::resource('laporan', \App\Http\Controllers\laporanController::class)->middleware('auth');
Route::resource('pendaftaran_asnet', \App\Http\Controllers\PendaftaranAsnetController::class)->middleware('auth');
Route::resource('daftar', \App\Http\Controllers\DaftarController::class)->middleware('auth');
Route::resource('bayar', \App\Http\Controllers\BayarController::class)->middleware('auth');


// Route::get('/users/daftar/{id}', [App\Http\Controllers\UserController::class, 'daftar'])->name('users.daftar');
// Route::post('/users/updatedaftar/{id}', [App\Http\Controllers\UserController::class, 'updatedaftar'])->name('users.updatedaftar');

