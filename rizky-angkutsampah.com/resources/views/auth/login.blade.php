@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h2>Login</h2>

            <!-- Field Email -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <!-- Field Password -->
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>

        <p>Belum punya akun? <a href="{{ route('register') }}">Register di sini</a></p>
    </div>
@endsection
