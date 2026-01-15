@extends('layouts.dashboard')

@section('content')

    <h2>Edit Data Paket</h2>

    <form action="{{ url('paket/' . $row->paket_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="paket_nama" class="form-label fw-bold">Nama Paket</label>
            <input type="text" class="form-control" name="paket_nama" id="paket_nama"
                   value="{{ $row->paket_nama }}">
        </div>

        <div class="mb-3">
            <label for="paket_deskripsi" class="form-label fw-bold">Deskripsi</label>
            <input type="text" class="form-control" name="paket_deskripsi" id="paket_deskripsi"
                   value="{{ $row->paket_deskripsi }}">
        </div>

        <div class="mb-3">
            <label for="paket_harga" class="form-label fw-bold">Harga</label>
            <input type="number" class="form-control" name="paket_harga" id="paket_harga"
                   value="{{ $row->paket_harga }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
