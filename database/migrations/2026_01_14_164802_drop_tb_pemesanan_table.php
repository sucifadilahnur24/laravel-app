<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('tb_pemesanan');
    }

    public function down(): void
    {
        Schema::create('tb_pemesanan', function (Blueprint $table) {
            $table->id('pemesanan_id');
            $table->unsignedBigInteger('paket_id');
            $table->timestamps();
        });
    }
};
