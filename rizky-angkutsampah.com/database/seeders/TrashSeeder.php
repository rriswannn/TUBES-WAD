<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trash;

class TrashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh: Menambahkan beberapa sampah ke dalam database
        Trash::create([
            'nama' => 'Contoh Sampah 1',
            'alamat' => 'Contoh Alamat 1',
            'jam_pengangkutan' => 'Contoh Jam 1',
            'jenis_sampah' => 'plastik,kaca',
            'jenis_sampah_lainnya' => 'Lainnya 1',
        ]);

        Trash::create([
            'nama' => 'Contoh Sampah 2',
            'alamat' => 'Contoh Alamat 2',
            'jam_pengangkutan' => 'Contoh Jam 2',
            'jenis_sampah' => 'kardus,besi',
            'jenis_sampah_lainnya' => 'Lainnya 2',
        ]);

        // Tambahkan logika pengisian data lainnya sesuai kebutuhan
    }
}
