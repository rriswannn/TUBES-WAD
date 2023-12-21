<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi data login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan login
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->intended('/');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => __('auth.failed')]);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
       // Validasi data registrasi
       $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Buat pengguna baru dan simpan ke database
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);

    // Redirect setelah berhasil registrasi
    return redirect('/');
}


    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect ke halaman utama atau halaman login setelah logout
        return redirect('/');
    }
}
