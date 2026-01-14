<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'pelanggan_nama'=> $request->pelanggan_nama,
            'pelanggan_no_hp'=> $request->pelanggan_no_hp,
            'pelanggan_alamat'=> $request->pelanggan_alamat,
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $row = Pelanggan::findOrFail($id);
    $row->update([
        'pelanggan_nama'   => $request->pelanggan_nama,
        'pelanggan_no_hp'  => $request->pelanggan_no_hp,
        'pelanggan_alamat' => $request->pelanggan_alamat,
    ]);

    return redirect('/pelanggan');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::FindOrFail($id);
        $row->delete();

        return redirect('/pelanggan');
    }
}
