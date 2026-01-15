@extends('layouts.dashboard')

@section('content')

    <h2>Tambah Paket</h2>

    <form action="{{ url('paket') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="paket_nama" class="form-label fw-bold">Nama Paket</label>
            <input type="text" class="form-control" name="paket_nama" id="paket_nama" required>
        </div>

        <div class="mb-3">
            <label for="paket_deskripsi" class="form-label fw-bold">Deskripsi</label>
            <input type="text" class="form-control" name="paket_deskripsi" id="paket_deskripsi" required>
        </div>

        <div class="mb-3">
            <label for="paket_harga" class="form-label fw-bold">Harga</label>
            <input type="number" class="form-control" name="paket_harga" id="paket_harga" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
