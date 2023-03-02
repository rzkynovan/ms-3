<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KaryawanController as AdminKaryawan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/karyawan', [AdminKaryawan::class, 'index'])->name('karyawan');
Route::post('/karyawan-store', [AdminKaryawan::class, 'store'])->name('karyawan.store');
Route::put('/karyawan/{id}', [AdminKaryawan::class, 'update'])->name('karyawan.update');