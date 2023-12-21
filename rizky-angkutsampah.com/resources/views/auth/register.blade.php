<!-- File: views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <form class="register-form" action="{{ route('register') }}" method="POST">
        @csrf

        <!-- Input Nama -->
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- Input Email -->
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Input Password -->
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <!-- Konfirmasi Password -->
        <div>
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <!-- Tombol Submit -->
        <div>
            <button type="submit">Register</button>
        </div>
    </form>

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
@endsection
