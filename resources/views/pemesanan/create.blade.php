@extends('layouts.dashboard')

@section('content')

<h2>Tambah Pemesanan</h2>

<form action="{{ url('pemesanan') }}" method="POST">
@csrf

{{-- Pelanggan --}}
<div class="mb-3">
    <label class="fw-bold">Pelanggan</label>
    <select name="pelanggan_id" class="form-control" required>
        <option value="">-- Pilih Pelanggan --</option>
        @foreach($pelanggan as $p)
            <option value="{{ $p->pelanggan_id }}">{{ $p->pelanggan_nama }}</option>
        @endforeach
    </select>
</div>

{{-- Paket --}}
<div class="mb-3">
    <label class="fw-bold">Paket</label>
    <select name="paket_id" class="form-control" required>
        <option value="">-- Pilih Paket --</option>
        @foreach($paket as $pk)
            <option value="{{ $pk->paket_id }}">
                {{ $pk->paket_nama }} - Rp{{ number_format($pk->paket_harga) }}
            </option>
        @endforeach
    </select>
</div>

{{-- Tanggal Pesan --}}
<div class="mb-3">
    <label class="fw-bold">Tanggal Pesan</label>
    <input type="datetime-local"
           name="pemesanan_tanggal_pesan"
           class="form-control"
           required>
</div>

{{-- Tanggal Selesai --}}
<div class="mb-3">
    <label class="fw-bold">Tanggal Selesai</label>
    <input type="datetime-local"
           name="pemesanan_tanggal_selesai"
           class="form-control">
</div>

{{-- Total Harga --}}
<div class="mb-3">
    <label class="fw-bold">Total Harga</label>
    <input type="number"
           name="pemesanan_total_harga"
           class="form-control"
           required>
</div>

{{-- Status --}}
<div class="mb-3">
    <label class="fw-bold">Status Pemesanan</label>
    <select name="pemesanan_status" class="form-control" required>
        <option value="">-- Pilih Status --</option>
        <option value="proses">Proses</option>
        <option value="selesai">Selesai</option>
    </select>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="{{ url('pemesanan') }}" class="btn btn-secondary">Kembali</a>

</form>

@endsection
