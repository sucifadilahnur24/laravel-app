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
            <td></td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection