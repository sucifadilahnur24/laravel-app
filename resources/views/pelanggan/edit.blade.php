@extends('layouts.dashboard')

@section('content')

    <h2>Edit Data Pelanggan</h2>

    <form action="{{ url('pelanggan/' . $row->pelanggan_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="pelanggan_nama" class="form-label fw-bold">Nama Pelanggan</label>
            <input type="text" class="form-control" name="pelanggan_nama" id="pelanggan_nama" value="{{ $row->pelanggan_nama }}">
        </div>

        <div class="mb-3">
            <label for="pelanggan_no_hp" class="form-label fw-bold">No Hp</label>
            <input type="text" class="form-control" name="pelanggan_no_hp" id="pelanggan_no_hp" value="{{ $row->pelanggan_no_hp }}">
        </div>

        <div class="mb-3">
            <label for="pelanggan_alamat" class="form-label fw-bold">Alamat</label>
            <input type="text" class="form-control" name="pelanggan_alamat" id="pelanggan_alamat" value="{{ $row->pelanggan_alamat }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
