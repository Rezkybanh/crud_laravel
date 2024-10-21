<?php

namespace App\Models; // Menentukan namespace untuk model ini

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait untuk factory model
use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model sebagai dasar untuk model Eloquent

class Siswa extends Model // Mendefinisikan kelas Siswa yang mewarisi dari Model
{
    use HasFactory; // Menggunakan trait HasFactory untuk mendukung pembuatan instance model menggunakan factory

    protected $table = 'siswa'; // Menentukan nama tabel yang digunakan dalam database (jika berbeda dari nama kelas)
}
