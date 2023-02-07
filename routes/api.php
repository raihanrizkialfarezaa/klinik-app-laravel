<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\DokterController;
use App\Http\Controllers\API\PasienController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AdminController::class)->group(function () {
    Route::post('login-admin', 'loginAdmin');
    Route::post('regist-admin', 'registAdmin');
    Route::post('refresh-admin', 'refresh');
    Route::post('logout-admin', 'logout');
});
Route::controller(PasienController::class)->group(function () {
    Route::post('login-pasien', 'loginPasien');
    Route::post('regist-pasien', 'registPasien');
    Route::post('refresh-pasien', 'refresh');
    Route::post('logout-pasien', 'logout');
});
Route::controller(DokterController::class)->group(function () {
    Route::post('login-dokter', 'loginDokter');
    Route::post('regist-dokter', 'registDokter');
    Route::post('refresh-dokter', 'refresh');
    Route::post('logout-dokter', 'logout');
});
