@extends('layouts.dashboard')

@section('content')

{{-- GOOGLE FONT --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

{{-- STYLE (KHUSUS DASHBOARD) --}}
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* CARD DASHBOARD */
    .card-dashboard {
        border-radius: 18px;
        transition: all 0.35s ease;
        cursor: pointer;
    }

    .card-dashboard:hover {
        transform: translateY(-8px) scale(1.04);
        box-shadow: 0 18px 35px rgba(0,0,0,0.18);
    }

    /* WARNA COKLAT – KREM */
    .bg-blue {
        background: linear-gradient(135deg, #a1887f, #ede7e3);
        color: #4e342e;
    }

    .bg-pink {
        background: linear-gradient(135deg, #bcaaa4, #f5f5f5);
        color: #4e342e;
    }

    .bg-purple {
        background: linear-gradient(135deg, #8d6e63, #d7ccc8);
        color: #ffffff;
    }

    .bg-softpink {
        background: linear-gradient(135deg, #efebe9, #ffffff);
        color: #4e342e;
    }

    .card-dashboard small {
        font-size: 14px;
        opacity: 0.85;
        letter-spacing: 0.6px;
    }

    .card-dashboard h2 {
        font-size: 38px;
        margin-top: 8px;
        font-weight: 700;
    }

    /* ALERT */
    .alert-dashboard {
        background: linear-gradient(135deg, #a1887f, #ede7e3);
        color: #4e342e;
        border-radius: 16px;
        font-size: 15px;
        font-weight: 500;
    }

    h4, h5 {
        letter-spacing: 0.5px;
        font-weight: 600;
        color: #4e342e;
    }
</style>

{{-- ALERT --}}
<div class="alert alert-dashboard shadow-sm mb-4">
    Hai 👋 Selamat Datang di Sistem Catering KostFoodie 🤎
</div>

<h4 class="mb-4">
    Dashboard Overview
</h4>

{{-- CARD INFO --}}
<div class="row g-4 mb-5">

    <div class="col-md-3">
        <a href="{{ url('pelanggan') }}" class="text-decoration-none">
            <div class="card card-dashboard bg-blue text-center">
                <div class="card-body">
                    <small>Total Pelanggan</small>
                    <h2>{{ $totalPelanggan }}</h2>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a href="{{ url('paket') }}" class="text-decoration-none">
            <div class="card card-dashboard bg-pink text-center">
                <div class="card-body">
                    <small>Total Paket</small>
                    <h2>{{ $totalPaket }}</h2>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a href="{{ url('pemesanan') }}" class="text-decoration-none">
            <div class="card card-dashboard bg-purple text-center">
                <div class="card-body">
                    <small>Total Pemesanan</small>
                    <h2>{{ $totalPemesanan }}</h2>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a href="{{ url('pemesanan') }}" class="text-decoration-none">
            <div class="card card-dashboard bg-softpink text-center">
                <div class="card-body">
                    <small>Pesanan Diproses</small>
                    <h2>{{ $pemesananProses }}</h2>
                </div>
            </div>
        </a>
    </div>

</div>

{{-- GRAFIK --}}
<div class="card shadow-sm border-0">
    <div class="card-body">
        <h5 class="mb-3">Statistik Data</h5>
        <canvas id="dashboardChart" height="100"></canvas>
    </div>
</div>

{{-- CHART JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('dashboardChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pelanggan', 'Paket', 'Pemesanan', 'Diproses'],
            datasets: [{
                data: [
                    {{ $totalPelanggan }},
                    {{ $totalPaket }},
                    {{ $totalPemesanan }},
                    {{ $pemesananProses }}
                ],
                backgroundColor: [
                    '#a1887f',
                    '#bcaaa4',
                    '#8d6e63',
                    '#efebe9'
                ],
                borderRadius: 14
            }]
        },
        options: {
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
