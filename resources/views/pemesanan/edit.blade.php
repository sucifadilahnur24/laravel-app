@extends('layouts.dashboard')

@section('content')

<h2>Edit Pemesanan</h2>

<form action="{{ url('pemesanan/'.$row->pemesanan_id) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- PELANGGAN --}}
    <div class="mb-3">
        <label class="fw-bold">Pelanggan</label>
        <select name="pelanggan_id" class="form-control" required>
            @foreach($pelanggan as $p)
                <option value="{{ $p->pelanggan_id }}"
                    {{ $row->pelanggan_id == $p->pelanggan_id ? 'selected' : '' }}>
                    {{ $p->pelanggan_nama }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- PAKET --}}
    <div class="mb-3">
        <label class="fw-bold">Paket</label>
        <select name="paket_id" class="form-control" required>
            @foreach($paket as $pk)
                <option value="{{ $pk->paket_id }}"
                    {{ $row->paket_id == $pk->paket_id ? 'selected' : '' }}>
                    {{ $pk->paket_nama }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- TANGGAL PESAN (READ ONLY) --}}
    <div class="mb-3">
        <label class="fw-bold">Tanggal Pesan</label>
        <input type="datetime-local"
               class="form-control"
               value="{{ \Carbon\Carbon::parse($row->pemesanan_tanggal_pesan)->format('Y-m-d\TH:i') }}"
               readonly>
    </div>

    {{-- TANGGAL SELESAI --}}
    <div class="mb-3">
        <label class="fw-bold">Tanggal Selesai</label>
        <input type="datetime-local"
               name="pemesanan_tanggal_selesai"
               class="form-control"
               value="{{ $row->pemesanan_tanggal_selesai 
                    ? \Carbon\Carbon::parse($row->pemesanan_tanggal_selesai)->format('Y-m-d\TH:i') 
                    : '' }}">
    </div>

    {{-- TOTAL HARGA --}}
    <div class="mb-3">
        <label class="fw-bold">Total Harga</label>
        <input type="number"
               name="pemesanan_total_harga"
               class="form-control"
               value="{{ $row->pemesanan_total_harga }}"
               required>
    </div>

    {{-- STATUS --}}
    <div class="mb-3">
        <label class="fw-bold">Status Pemesanan</label>
        <select name="pemesanan_status" class="form-control" required>
            <option value="proses" {{ $row->pemesanan_status == 'proses' ? 'selected' : '' }}>
                Proses
            </option>
            <option value="selesai" {{ $row->pemesanan_status == 'selesai' ? 'selected' : '' }}>
                Selesai
            </option>
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ url('pemesanan') }}" class="btn btn-secondary">Kembali</a>

</form>

@endsection
