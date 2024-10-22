@extends('layout')

@section('konten')

    <div class="d-flex">
        <h4>List Siswa</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{route('siswa.tambah')}}">Tambah Siswa</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($siswa as $no=>$data)
        <tr>
            <td>{{ $no+1}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->no_hp}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->hobi}}</td>
            <td>
                <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-warning btn-sm ">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $data->id }})">Hapus</button>

                <form id="delete-form-{{ $data->id }}" action="{{route('siswa.delete', $data->id)}}" method="post" style="display: none;">
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endsection
