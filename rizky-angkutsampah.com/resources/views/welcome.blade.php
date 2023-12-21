<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkut Sampah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Angkut Sampah</h1>
    </header>

    <nav>
        <!-- Include navigation links -->
        <ul>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <!-- Include other navigation links -->
        </ul>
    </nav>

    <section id="content">
        <!-- Include content sections for login, register, addtrash, tracking, news, and contact -->
        @yield('content')
    </section>

    <footer>
        <p>&copy; 2023 Angkut Sampah</p>
    </footer>
</body>
</html>
