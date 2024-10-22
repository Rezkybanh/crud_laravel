@extends('layout')

@section('konten')

<h4>Tambah Siswa</h4>

<form action="{{route('siswa.submit')}}" method="post">
    @csrf
    <label >NIS</label>
    <input type="number" name="nis" class="form-control mb-2" required>
    <label >Nama</label>
    <input type="text" name="nama" class="form-control  mb-2" required>
    <label >Alamat</label>
    <input type="text" name="alamat" class="form-control  mb-2" required>
    <label >No HP</label>
    <input type="text" name="no_hp" class="form-control  mb-2" required>
    <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="jenis_kelamin" required>
        <option selected>Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    <label >Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2" required>

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection
