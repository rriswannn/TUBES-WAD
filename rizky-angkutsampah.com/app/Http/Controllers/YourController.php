<?php

// app/Http/Controllers/YourController.php
//control gambar//


// app/Http/Controllers/YourController.php

namespace App\Http\Controllers;

use App\Models\YourModel;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function yourMethod()
    {
        // Ambil tiga instance dari model YourModel
        $yourModelInstances = YourModel::limit(3)->get();

        // Kirim variabel ke view
        return view('home', compact('yourModelInstances'));
    }
}
