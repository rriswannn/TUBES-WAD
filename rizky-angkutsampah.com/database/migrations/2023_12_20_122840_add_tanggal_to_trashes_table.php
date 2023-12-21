<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * tamabhin kolom tanggal ke fungsi up
     */
    public function up(): void
    {
        Schema::table('trashes', function (Blueprint $table) {
            $table->date('tanggal')->after('jam_pengangkutan')->nullable();
        });
    }

    /**
     * pembatalan perubahan
     */
    public function down(): void
    {
        Schema::table('trashes', function (Blueprint $table) {
            $table->dropColumn('tanggal');
        });
    }
};
