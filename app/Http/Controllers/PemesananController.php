<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Pelanggan;
use App\Models\Paket;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $rows = Pemesanan::with(['pelanggan', 'paket'])->get();
        return view('pemesanan.index', compact('rows'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $paket = Paket::all();
        return view('pemesanan.create', compact('pelanggan', 'paket'));
    }

    // ===================== CREATE =====================
    public function store(Request $request)
    {
        $paket = Paket::findOrFail($request->paket_id);

        Pemesanan::create([
            'pelanggan_id'              => $request->pelanggan_id,
            'paket_id'                  => $request->paket_id,
            'pemesanan_tanggal_pesan'   => now(),

            // boleh kosong saat create
            'pemesanan_tanggal_selesai' => $request->pemesanan_tanggal_selesai,

            'pemesanan_total_harga'     => $paket->paket_harga,
            'pemesanan_status'          => $request->pemesanan_status,
        ]);

        return redirect('/pemesanan');
    }

    // ===================== EDIT =====================
    public function edit(string $id)
    {
        $row = Pemesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $paket = Paket::all();

        return view('pemesanan.edit', compact('row', 'pelanggan', 'paket'));
    }

    // ===================== UPDATE =====================
    public function update(Request $request, string $id)
    {
        $row = Pemesanan::findOrFail($id);

        $row->update([
            'pelanggan_id'              => $request->pelanggan_id,
            'paket_id'                  => $request->paket_id,
            'pemesanan_tanggal_selesai' => $request->pemesanan_tanggal_selesai,
            'pemesanan_total_harga'     => $request->pemesanan_total_harga,
            'pemesanan_status'          => $request->pemesanan_status,
        ]);

        return redirect('/pemesanan');
    }

    // ===================== DELETE =====================
    public function destroy(string $id)
    {
        Pemesanan::findOrFail($id)->delete();
        return redirect('/pemesanan');
    }
}
