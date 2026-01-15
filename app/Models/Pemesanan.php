<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;
use App\Models\Paket;

class Pemesanan extends Model
{
    protected $table = 'tb_pemesanan';
    protected $primaryKey = 'pemesanan_id';

    protected $guarded = [];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'pelanggan_id');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id', 'paket_id');
    }
}
