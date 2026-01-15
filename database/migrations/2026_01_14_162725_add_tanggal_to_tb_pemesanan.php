<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tb_pemesanan', function (Blueprint $table) {
            $table->dateTime('pemesanan_tanggal_pesan')->after('paket_id');
            $table->dateTime('pemesanan_tanggal_selesai')
                  ->nullable()
                  ->after('pemesanan_tanggal_pesan');
        });
    }

    public function down(): void
    {
        Schema::table('tb_pemesanan', function (Blueprint $table) {
            $table->dropColumn([
                'pemesanan_tanggal_pesan',
                'pemesanan_tanggal_selesai'
            ]);
        });
    }
};
