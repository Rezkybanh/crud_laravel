<?php

namespace App\Http\Controllers; // Menentukan namespace untuk controller ini

use App\Models\Siswa; // Mengimpor model Siswa untuk digunakan dalam controller
use Illuminate\Http\Request; // Mengimpor kelas Request untuk menangani permintaan HTTP

class SiswaController extends Controller // Mendefinisikan kelas SiswaController yang mewarisi dari Controller
{
    // Fungsi untuk menampilkan daftar siswa
    function tampil() {
        $siswa = Siswa::get(); // Mengambil semua data siswa dari database
        return view('siswa.tampil', compact('siswa')); // Mengembalikan view 'siswa.tampil' dengan data siswa
    }

    // Fungsi untuk menampilkan form tambah siswa
    function tambah(){
        return view('siswa.tambah'); // Mengembalikan view 'siswa.tambah'
    }

    // Fungsi untuk menangani pengiriman data saat menambah siswa
    function submit(Request $request){
        $siswa = new Siswa(); // Membuat instance baru dari model Siswa
        $siswa->nis = $request->nis; // Mengisi atribut NIS dengan data dari permintaan
        $siswa->nama = $request->nama; // Mengisi atribut nama dengan data dari permintaan
        $siswa->alamat = $request->alamat; // Mengisi atribut alamat dengan data dari permintaan
        $siswa->no_hp = $request->no_hp; // Mengisi atribut no_hp dengan data dari permintaan
        $siswa->jenis_kelamin = $request->jenis_kelamin; // Mengisi atribut jenis_kelamin dengan data dari permintaan
        $siswa->hobi = $request->hobi; // Mengisi atribut hobi dengan data dari permintaan
        $siswa->save(); // Menyimpan data siswa ke dalam database

        return redirect()->route('siswa.tampil'); // Mengalihkan ke route untuk menampilkan siswa setelah berhasil menambah
    }

    // Fungsi untuk menampilkan form edit siswa berdasarkan ID
    function edit($id) {
        $siswa = Siswa::find($id); // Mencari siswa berdasarkan ID yang diberikan
        return view('siswa.edit', compact('siswa')); // Mengembalikan view 'siswa.edit' dengan data siswa
    }

    // Fungsi untuk menangani pengiriman data saat mengupdate siswa
    function update(Request $request, $id){
        $siswa = Siswa::find($id); // Mencari siswa berdasarkan ID yang diberikan
        $siswa->nis = $request->nis; // Mengupdate atribut NIS dengan data dari permintaan
        $siswa->nama = $request->nama; // Mengupdate atribut nama dengan data dari permintaan
        $siswa->alamat = $request->alamat; // Mengupdate atribut alamat dengan data dari permintaan
        $siswa->no_hp = $request->no_hp; // Mengupdate atribut no_hp dengan data dari permintaan
        $siswa->jenis_kelamin = $request->jenis_kelamin; // Mengupdate atribut jenis_kelamin dengan data dari permintaan
        $siswa->hobi = $request->hobi; // Mengupdate atribut hobi dengan data dari permintaan
        $siswa->update(); // Mengupdate data siswa ke dalam database

        return redirect()->route('siswa.tampil'); // Mengalihkan ke route untuk menampilkan siswa setelah berhasil mengupdate
    }

    // Fungsi untuk menghapus siswa berdasarkan ID
    function delete($id){
        $siswa = Siswa::find($id); // Mencari siswa berdasarkan ID yang diberikan
        $siswa->delete(); // Menghapus data siswa dari database
        return redirect()->route('siswa.tampil'); // Mengalihkan ke route untuk menampilkan siswa setelah berhasil menghapus
    }
}
