<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Laravel Kasir'))</title>

    <!-- Bootstrap 5.3 CSS -->
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript Bootstrap -->

    <!-- Custom CSS (if needed) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel Kasir') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('transactions') ? 'active' : '' }}" href="/transactions">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('reports') ? 'active' : '' }}" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="#" id="logout-link">Logout</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; {{ date('Y') }} Laravel Kasir</p>
    </footer>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS (if needed) -->
    @yield('scripts')
    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> --}}
    {{-- <script>
        $(document).ready(function() {
            $('#logout-link').click(function(event) {
                event.preventDefault(); // Mencegah aksi default dari link
                $('#logout-form').submit(); // Mengirimkan form logout
            });
        });
    </script> --}}
    <style>
        .nav-link.active {
            border-bottom: 5px solid blue; /* Ganti 'blue' dengan warna yang Anda inginkan */
        }
    </style>
</body>
</html>