<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pemesanan', function (Blueprint $table) {
    $table->bigIncrements('pemesanan_id');

    $table->unsignedBigInteger('pelanggan_id');
    $table->unsignedBigInteger('paket_id');

    // ⬇️ TAMBAHAN KAMU
    $table->dateTime('pemesanan_tanggal_pesan');
    $table->dateTime('pemesanan_tanggal_selesai')->nullable();

    $table->decimal('pemesanan_total_harga', 10, 2);
    $table->string('pemesanan_status', 20);

    $table->timestamps();

    $table->foreign('pelanggan_id')
          ->references('pelanggan_id')
          ->on('tb_pelanggan')
          ->onDelete('cascade');

    $table->foreign('paket_id')
          ->references('paket_id')
          ->on('tb_paket')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pemesanan');
    }
};
