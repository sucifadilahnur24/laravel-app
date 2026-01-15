@extends('layouts.dashboard')

@section('content')

<h2>Paket</h2>
<a href="{{ url('paket/create') }}" class="btn btn-primary mb-3">
    Tambah Paket
</a>

<table class="table table-bordered table-hover align-middle">
    <thead class="table-light text-center">
        <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->paket_id }}</td>
            <td class="text-start">{{ $row->paket_nama }}</td>
            <td class="text-start">{{ $row->paket_deskripsi }}</td>
            <td class="fw-bold">
                Rp {{ number_format($row->paket_harga, 0, ',', '.') }}
            </td>
            <td>
                <a href="{{ url('paket/' . $row->paket_id . '/edit') }}"
                   class="btn btn-sm btn-primary me-1">
                    Edit
                </a>

                <form action="{{ url('paket/' . $row->paket_id) }}" 
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Ingin Hapus Data Paket?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
