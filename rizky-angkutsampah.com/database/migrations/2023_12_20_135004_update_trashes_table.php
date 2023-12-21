<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrashesTable extends Migration
{
    public function up()
    {
        // Tambahkan perubahan tabel di sini
        Schema::table('trashes', function (Blueprint $table) {
            // Misalnya, jika Anda ingin menambah kolom baru:
            // $table->string('kolom_baru');
        });
    }

    public function down()
    {
        // Definisikan pembatalan perubahan jika diperlukan
        // Schema::table('trashes', function (Blueprint $table) {
        //     $table->dropColumn('kolom_baru');
        // });
    }
}

