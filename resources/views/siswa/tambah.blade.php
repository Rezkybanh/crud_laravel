@extends('layout')

@section('konten')

<h4>Tambah Siswa</h4>

<form action="{{route('siswa.submit')}}" method="post">
    @csrf
    <label >NIS</label>
    <input type="number" name="nis" class="form-control mb-2">
    <label >Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label >Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label >No HP</label>
    <input type="text" name="no_hp" class="form-control mb-2">
    <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="jenis_kelamin">
        <option selected>Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    <label >Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection