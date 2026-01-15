@extends('layouts.dashboard')

@section('content')



<h2>Pelanggan</h2>
<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3">
    Tambah Pelanggan
</a>

<table class="table table-bordered table-hover align-middle">
    <thead class="table-light text-center">
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->pelanggan_id }}</td>
            <td class="text-start">{{ $row->pelanggan_nama }}</td>
            <td>{{ $row->pelanggan_no_hp}}</td>
            <td class="text-start">{{ $row->pelanggan_alamat }}</td>
            <td>
                <a href="{{ url('pelanggan/'. $row->pelanggan_id .'/edit') }}"
                    class="btn btn-sm btn-primary me-1">
                    Edit
                </a>

                <form action="{{ url('pelanggan/'. $row->pelanggan_id) }}" 
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Ingin Hapus Data Pelanggan?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
