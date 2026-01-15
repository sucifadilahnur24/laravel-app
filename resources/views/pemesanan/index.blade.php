@extends('layouts.dashboard')

@section('content')



<h2>Pemesanan</h2>
<a href="{{ url('pemesanan/create') }}" class="btn btn-primary mb-3">
    Tambah Pemesanan
</a>

<table class="table table-bordered table-hover align-middle">
    <thead class="text-center align-middle">
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Paket</th>
            <th>Tanggal Pesan</th>
            <th>Tanggal Selesai</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody class="align-middle text-center">
        @foreach ($rows as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td class="text-start">
                {{ $row->pelanggan->pelanggan_nama }}
            </td>

            <td>{{ $row->paket->paket_nama }}</td>

            <td>
                {{ date('d-m-Y', strtotime($row->pemesanan_tanggal_pesan)) }} <br>
                <small class="text-muted">
                    {{ date('H:i', strtotime($row->pemesanan_tanggal_pesan)) }}
                </small>
            </td>

            <td>
                @if($row->pemesanan_tanggal_selesai)
                    {{ date('d-m-Y', strtotime($row->pemesanan_tanggal_selesai)) }} <br>
                    <small class="text-muted">
                        {{ date('H:i', strtotime($row->pemesanan_tanggal_selesai)) }}
                    </small>
                @else
                    <span class="text-muted">-</span>
                @endif
            </td>

            <td class="fw-bold text-success">
                Rp {{ number_format($row->pemesanan_total_harga, 0, ',', '.') }}
            </td>

            <td>
                <span class="badge rounded-pill 
                    {{ $row->pemesanan_status == 'Selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
                    {{ $row->pemesanan_status }}
                </span>
            </td>

            <td>
                <a href="{{ url('pemesanan/'.$row->pemesanan_id.'/edit') }}"
                   class="btn btn-sm btn-primary mb-1">
                    Edit
                </a>

                <form action="{{ url('pemesanan/'.$row->pemesanan_id) }}"
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                        onclick="return confirm('Hapus data pemesanan?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
