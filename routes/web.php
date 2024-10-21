<?php

use App\Http\Controllers\SiswaController; // Mengimpor SiswaController untuk digunakan dalam route
use Illuminate\Support\Facades\Route; // Mengimpor facade Route untuk mendefinisikan routing

// Route untuk menampilkan halaman utama
Route::get('/', function () {
    return view('welcome'); // Mengembalikan view 'welcome' saat URL root diakses
});

// Route untuk menampilkan daftar siswa, menghubungkan ke metode 'tampil' dalam SiswaController
Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');

// Route untuk menampilkan form tambah siswa, menghubungkan ke metode 'tambah' dalam SiswaController
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');

// Route untuk menangani pengiriman data form tambah siswa, menghubungkan ke metode 'submit' dalam SiswaController
Route::post('/siswa/tambah/submit', [SiswaController::class, 'submit'])->name('siswa.submit');

// Route untuk menampilkan form edit siswa berdasarkan ID, menghubungkan ke metode 'edit' dalam SiswaController
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');

// Route untuk menangani pengiriman data form update siswa berdasarkan ID, menghubungkan ke metode 'update' dalam SiswaController
Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');

// Route untuk menangani penghapusan siswa berdasarkan ID, menghubungkan ke metode 'delete' dalam SiswaController
Route::post('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.delete');
