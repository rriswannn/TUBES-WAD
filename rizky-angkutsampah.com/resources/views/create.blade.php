<!-- File: resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Angkutsampah.com')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

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

<form action="{{ route('trash.store') }}" method="POST">
    @csrf

    <!-- Input Tanggal -->
    <div>
        <label for="tanggal">Tanggal Pengangkutan:</label>
        <input type="date" id="tanggal" name="tanggal" required>
    </div>

    <!-- Input Nama -->
    <div>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>

    <!-- Input Alamat -->
    <div>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
    </div>

    <!-- Input Jam Pengangkutan -->
    <div>
        <label for="jam_pengangkutan">Jam Pengangkutan:</label>
        <input type="text" id="jam_pengangkutan" name="jam_pengangkutan" required>
    </div>

    <!-- Input Nomor Telepon -->
    <div>
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" required>
    </div>

    <!-- Input Jenis Sampah Lainnya -->
    <div>
        <label for="jenis_sampah_lainnya">Jenis Sampah Lainnya:</label>
        <input type="text" id="jenis_sampah_lainnya" name="jenis_sampah_lainnya">
    </div>

    <!-- Tombol Submit -->
    <div>
        <button type="submit">Tambah Sampah</button>
    </div>
</form>
</body>
</html>

<!-- Menampilkan pesan kesalahan -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Menampilkan pesan berhasil -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Menampilkan pesan gagal -->
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
