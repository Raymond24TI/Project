<?php

use Illuminate\Support\Facades\Route;
#new added
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

#Simple route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
//Route::get('/mahasiswa', function () {
//    return 'Halo Mahasiswa';
//});

#Parameter route
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});
Route::get('/nim/{param1?}', function ($param1='') {
    return 'Nim saya: '.$param1;
});

#Named route
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

#With controller
Route::get('/mahasiswa/{param1}',[MahasiswaController::class, 'show']);

#Route view
Route::get('/about', function () {
    return view('halaman-about');
});

#Latihan1
Route::get('/matakuliah',[MatakuliahController::class, 'index']);

Route::get('/matakuliah/show/', function () {
    return 'Masukkan kode matakuliah!';
});

Route::get('/matakuliah/show/{param1}',[MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class,'index']);


Route::get('/Pegawai',[PegawaiController::class, 'index']);
