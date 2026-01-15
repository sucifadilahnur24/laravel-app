<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suci Fadhilah Nur">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CateringKostFoodie') }}</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>

<div class="d-flex" id="wrapper">

    <!-- SIDEBAR -->
    <div class="bg-primary border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-white fw-bold">
            CateringKostFoodie
        </div>

        <div class="list-group list-group-flush">
            <a href="{{ url('dashboard') }}"
               class="list-group-item list-group-item-action {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>

            <a href="{{ url('pelanggan') }}"
               class="list-group-item list-group-item-action {{ Request::is('pelanggan*') ? 'active' : '' }}">
                <i class="bi bi-people-fill me-2"></i> Pelanggan
            </a>

            <a href="{{ url('paket') }}"
               class="list-group-item list-group-item-action {{ Request::is('paket*') ? 'active' : '' }}">
                <i class="bi bi-box-seam me-2"></i> Paket
            </a>

            <a href="{{ url('pemesanan') }}"
               class="list-group-item list-group-item-action {{ Request::is('pemesanan*') ? 'active' : '' }}">
                <i class="bi bi-cart-check-fill me-2"></i> Pemesanan
            </a>

            <a class="list-group-item list-group-item-action"
               href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}"
                  method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <!-- CONTENT -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="menu-toggle">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </nav>

        <div class="container-fluid p-4">
            @yield('content')
        </div>
    </div>

</div>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
