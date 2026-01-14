@extends('layouts.app')

@section('content')

<h2>Pelanggan</h2>
<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->pelanggan_id }}</td>
            <td>{{ $row->pelanggan_nama }}</td>
            <td>{{ $row->pelanggan_no_hp}}</td>
            <td>{{ $row->pelanggan_alamat }}</td>
            <td>
                <a href="{{ url('pelanggan/'. $row->pelanggan_id .'/edit') }}"
                    class="btn btn-primary btn-sm">Edit</a>
                
                <form action="{{ url('pelanggan/'. $row->pelanggan_id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Ingin Hapus Data Pelanggan?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection