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
Route::resource('keluhanpelanggan', \App\Http\Controllers\KeluhanPelangganController::class)->middleware('auth');
Route::resource('keluhanmarketing', \App\Http\Controllers\KeluhanMarketingController::class)->middleware('auth');
Route::resource('keluhanteknisi', \App\Http\Controllers\KeluhanTeknisiController::class)->middleware('auth');
Route::resource('pembayaran', \App\Http\Controllers\PembayaranController::class)->middleware('auth');
Route::resource('laporan', \App\Http\Controllers\laporanController::class)->middleware('auth');
Route::resource('pendaftaran_asnet', \App\Http\Controllers\PendaftaranAsnetController::class)->middleware('auth');
Route::resource('daftar', \App\Http\Controllers\DaftarController::class)->middleware('auth');
Route::resource('bayar', \App\Http\Controllers\BayarController::class)->middleware('auth');

Route::post('/keluhan-teknisi/selesai', 'KeluhanTeknisiController@selesai')->name('keluhan-teknisi.selesai');


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/main', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});