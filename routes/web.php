<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RumahSakitController;

Route::resource('rumah_sakits', RumahSakitController::class);

// Route untuk menampilkan form tambah data
Route::get('rumah_sakits/create', [RumahSakitController::class, 'create'])->name('rumah_sakits.create');

// Route untuk menampilkan form edit data berdasarkan ID
Route::get('rumah_sakits/{id}/edit', [RumahSakitController::class, 'edit'])->name('rumah_sakits.edit');

use App\Http\Controllers\DokterController;

// Routing untuk dokter
use App\Http\Controllers\DoctorController;

Route::resource('dokters', DoctorController::class);

Route::get('/dokters', [DoctorController::class, 'index'])->name('dokters.index');
Route::get('/dokters/create', [DoctorController::class, 'create'])->name('dokters.create');
Route::post('/dokters', [DoctorController::class, 'store'])->name('dokters.store');
Route::get('/dokters/{dokter}/edit', [DoctorController::class, 'edit'])->name('dokters.edit');
Route::put('/dokters/{dokter}', [DoctorController::class, 'update'])->name('dokters.update');
Route::delete('/dokters/{dokter}', [DoctorController::class, 'destroy'])->name('dokters.destroy');
Route::get('/rumahsakit', [RumahSakitController::class, 'index'])->name('rumahsakit.index');




