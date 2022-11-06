<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/data', [MahasiswaController::class, 'datamahasiswa'])->name('mahasiswa.data');
Route::get('/matakuliah', [MahasiswaController::class, 'matakuliah'])->name('matakuliah');
Route::get('/detailmahasiswa', [MahasiswaController::class, 'detailmahasiswa'])->name('detailmahasiswa');
Route::get('/detailmahasiswa/{id}', [MahasiswaController::class, 'detailnilai'])->name('detailmahasiswa.nilai');
Route::get('/unduh', [MahasiswaController::class, 'unduh'])->name('unduh');


