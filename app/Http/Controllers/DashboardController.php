<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Paket;
use App\Models\Pemesanan;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalPelanggan = Pelanggan::count();
        $totalPaket = Paket::count();
        $totalPemesanan = Pemesanan::count();
        $pemesananProses = Pemesanan::where('pemesanan_status', 'Proses')->count();

        return view('dashboard', compact(
            'totalPelanggan',
            'totalPaket',
            'totalPemesanan',
            'pemesananProses'
        ));
    }
}
