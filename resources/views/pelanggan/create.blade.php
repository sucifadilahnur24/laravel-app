@extends('layouts.dashboard')

@section('content')

    <h2>Tambah Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="pelanggan_nama" class="form-label fw-bold">Nama Pelanggan</label>
            <input type="text" class="form-control" name="pelanggan_nama" id="pelanggan_nama" required>
        </div>

        <div class="mb-3">
            <label for="pelanggan_no_hp" class="form-label fw-bold">No Hp</label>
            <input type="text" class="form-control" name="pelanggan_no_hp" id="pelanggan_no_hp" required>
        </div>

        <div class="mb-3">
            <label for="pelanggan_alamat" class="form-label fw-bold">Alamat</label>
            <input type="text" class="form-control" name="pelanggan_alamat" id="pelanggan_alamat" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
