@extends('layout')

@section('konten')
    <h4>Edit Siswa</h4>

    <form id="edit-form" action="{{ route('siswa.update', $siswa->id) }}" method="post">
        @csrf
        <label>NIS</label>
        <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
        <label>No HP</label>
        <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control mb-2">

        <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="jenis_kelamin">
            <option selected>Jenis Kelamin</option>
            <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>

        <label>Hobi</label>
        <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control mb-2">

        <button type="button" class="btn btn-primary" onclick="confirmEdit()">Edit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmEdit() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan diperbarui!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, perbarui!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('edit-form').submit();
                }
            })
        }
    </script>
@endsection
