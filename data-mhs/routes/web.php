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




Route::get('provinsi', [App\Http\Controllers\HomeController::class, 'provinsi'])->name('provinsi.provinsi');
Route::get('provinsi/add', [App\Http\Controllers\ProvinsiController::class, 'addProvinsi']);
Route::post('provinsi', [App\Http\Controllers\ProvinsiController::class, 'store']);
Route::get('provinsi/edit/{id}', [App\Http\Controllers\ProvinsiController::class, 'edit']);
Route::patch('provinsi/{id}', [App\Http\Controllers\ProvinsiController::class, 'update']);
Route::delete('provinsi/{id}',[App\Http\Controllers\ProvinsiController::class, 'delete']);



Route::get('kabupaten', [App\Http\Controllers\KabupatenController::class, 'index'])->name('kabupaten.kabupaten');
Route::get('kabupaten/add', [App\Http\Controllers\KabupatenController::class, 'addKabupaten']);
Route::post('kabupaten', [App\Http\Controllers\KabupatenController::class, 'store']);
Route::get('kabupaten/{kabupaten}/edit/', [App\Http\Controllers\KabupatenController::class, 'edit']);
Route::patch('kabupaten/{kabupaten}', [App\Http\Controllers\KabupatenController::class, 'update']);
Route::delete('kabupaten/{kabupaten}',[App\Http\Controllers\KabupatenController::class, 'delete']);
// Route::resource('kabupaten', KabupatenController::class);


Route::get('kecamatan', [App\Http\Controllers\KecamatanController::class, 'kecamatan'])->name('kecamatan.kecamatan');
Route::get('kecamatan/add', [App\Http\Controllers\KecamatanController::class, 'addKecamatan']);


Route::get('mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'mahasiswa'])->name('mahasiswa.mahasiswa');
//Route::resource('mahasiswa', [App\Http\Controllers\MahasiswaController::class]);
Route::get('mahasiswa/add', [App\Http\Controllers\MahasiswaController::class, 'addMahasiswa']);
Route::post('mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store']);
Route::get('mahasiswa/{mahasiswa}/edit/', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::patch('mahasiswa/{mahasiswa}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::post('mahasiswa/{mahasiswa}/riwayat', [App\Http\Controllers\MahasiswaController::class, 'store_riwayat']);
Route::delete('mahasiswa/{mahasiswa}/{mhs_id}/riwayat', [App\Http\Controllers\MahasiswaController::class, 'destroy_riwayat']);
Route::delete('mahasiswa/{mahasiswa}',[App\Http\Controllers\MahasiswaController::class, 'destroy']);
