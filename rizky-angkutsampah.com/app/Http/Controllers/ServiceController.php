<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Konten untuk halaman Layanan
        return view('services.index');
    }
}
