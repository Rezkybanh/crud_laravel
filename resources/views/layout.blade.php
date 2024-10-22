<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Style semua tag <a> berwarna hitam */
        a {
            text-decoration: none;
        }

        /* Override style untuk link "Muhamad Rezky Maulana" */
        .footer-link {
            color: rgb(53, 52, 52) !important;
        }
    </style>
</head>

<body>

    <h1 class="text-center">CRUD Siswa Dengan Laravel 11</h1>

    <div class="mt-3 container">
        @yield('konten')
    </div>

    <footer class="bg-light text-center py-3">
        <div class="container">
            <p class="mb-0">
                &copy;Copyright <a href="https://www.instagram.com/adkylana__/" target="_blank"
                    class="footer-link">Muhamad Rezky Maulana</a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
            });
        @endif
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ session('error') }}",
            });
        @endif
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
            });
        @endif
    </script>

</body>

</html>
