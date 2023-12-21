<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('trashes', function (Blueprint $table) {
            // Hapus kolom 'created_at' dan 'updated_at'
            $table->dropTimestamps();

            // Tambahkan kolom 'tanggal' sebagai timestamp
            $table->timestamp('tanggal');

            // Tambahkan kolom 'telepon'
            $table->string('telepon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Kembalikan kolom 'created_at' dan 'updated_at'
        Schema::table('trashes', function (Blueprint $table) {
            $table->timestamps();
        });

        // Hapus kolom 'tanggal' dan 'telepon'
        Schema::table('trashes', function (Blueprint $table) {
            $table->dropColumn('tanggal');
            $table->dropColumn('telepon');
        });
    }
};
