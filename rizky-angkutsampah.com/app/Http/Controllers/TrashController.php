<?php

// File: app/Http/Controllers/TrashController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trash;

class TrashController extends Controller
{
    // Menampilkan formulir penambahan sampah
    public function create()
    {
        return view('create');
    }

    // Menangani penambahan sampah
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jam_pengangkutan' => 'required',
            'tanggal' => 'required|date',
            'telepon' => 'required',
        ]);

        // Simpan sampah ke dalam database
        $trash = Trash::create($request->all());

        if ($trash) {
            return redirect()->back()->with('success', 'Sampah berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan sampah');
        }
    }
}
