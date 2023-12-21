<!-- File: resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', Selamat datang di Angkutsampah.com!)</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Style untuk menyembunyikan formulir awalnya */
        #formTambahSampah {
            display: none;
        }
    </style>
</head>
<body>

    <header>
        <h1>Angkutsampah.com</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('services') }}">Layanan</a></li> 
            <li><a href="{{ route('contact') }}">Contact Us</a></li> 
            <li><a href="{{ route('trash.create') }}">Tambah Sampah</a></li>

            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>
    </nav>

    <div id="wrapper">
        <section id="content">
            @yield('content')
            
            <!-- Formulir Tambah Sampah -->
            <div id="formTambahSampah">
                @include('create') <!-- Include formulir dari file create_trash.blade.php -->
            </div>
        </section>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <p>&copy; 2023 Angkutsampah.com</p>
    </footer>

    <script>
        // Event listener untuk tombol "Tambah Sampah"
        document.getElementById('btnTambahSampah').addEventListener('click', function() {
            document.getElementById('formTambahSampah').style.display = 'block';
        });
    </script>

</body>
</html>
