<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AbsenPulangController;

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard');
    })->name('home');

    Route::resource('users', UserController::class);
    Route::resource('absensi', AbsensiController::class)->parameters(['absensi' => 'presensi']);
    Route::resource('absen_pulang', AbsenPulangController::class);
});


// Route::get('/absen_pulang', function () {
//     return view('pages.absensi.pulang');
// })->name('absen_pulang');




