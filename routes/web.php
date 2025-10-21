<?php

use Illuminate\Support\Facades\Route;
#new added
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

#Simple route

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

Route::get('/home', function () {
    return view('home');
})->name('home');



Route::get('/Pegawai',[PegawaiController::class, 'index']);


Route::get('/auth',[AuthController::class, 'index'])->name('auth');
Route::post('/auth/login',[AuthController::class, 'login']);

Route::get('/go/{tujuan}',[HomeController::class, 'redirectTo'])->name('go');



Route::get('/', function () {
    return view('logien.login');
})->name('start');
Route::get('/reg', function () {
    return view('logien.register');
})->name('reg');

Route::post('/starting', [AuthController::class, 'login1'])->name('masuk');
Route::post('/daftar', [AuthController::class, 'signup'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
