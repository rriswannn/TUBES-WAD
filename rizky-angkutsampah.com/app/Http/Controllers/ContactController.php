<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Konten untuk halaman Contact Us
        return view('contact.index');
    }
}