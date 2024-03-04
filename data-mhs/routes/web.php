<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\KabupatenController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('main');
});

Route::get('mahasiswa', [App\Http\Controllers\HomeController::class, 'mahasiswa']);
Route::get('kecamatan', [App\Http\Controllers\HomeController::class, 'kecamatan']);
Route::get('riwayatpendidikan', [App\Http\Controllers\HomeController::class, 'riwayatpendidikan']);



Route::get('provinsi', [App\Http\Controllers\HomeController::class, 'provinsi'])->name('provinsi.provinsi');
Route::get('provinsi/add', [App\Http\Controllers\ProvinsiController::class, 'addProvinsi']);
Route::post('provinsi', [App\Http\Controllers\ProvinsiController::class, 'store']);
Route::get('provinsi/edit/{id}', [App\Http\Controllers\ProvinsiController::class, 'edit']);
Route::patch('provinsi/{id}', [App\Http\Controllers\ProvinsiController::class, 'update']);
Route::delete('provinsi/{id}',[App\Http\Controllers\ProvinsiController::class, 'delete']);



Route::get('kabupaten', [App\Http\Controllers\KabupatenController::class, 'index'])->name('kabupaten.kabupaten');
Route::get('kabupaten/add', [App\Http\Controllers\KabupatenController::class, 'addKabupaten']);
Route::post('kabupaten', [App\Http\Controllers\KabupatenController::class, 'store']);
Route::get('kabupaten/{id}/edit/', [App\Http\Controllers\KabupatenController::class, 'edit']);
Route::patch('kabupaten/{id}', [App\Http\Controllers\KabupatenController::class, 'update']);
Route::resource('kabupaten', KabupatenController::class);
