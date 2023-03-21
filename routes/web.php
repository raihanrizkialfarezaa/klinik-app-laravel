<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PoliController;
use Illuminate\Support\Facades\Auth;
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
    return view('page.user.page.index');
})->name('pageawal');
Route::get('/daftar', [PendaftaranController::class, 'create'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('dokter', DokterController::class);
Route::resource('poli', PoliController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
