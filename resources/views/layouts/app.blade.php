<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS VINA5208 - @yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-sage {
            background-color: #9CAF88 !important;
        }
        .btn-sage {
            background-color: #9CAF88;
            border-color: #9CAF88;
            color: white;
        }
        .btn-sage:hover {
            background-color: #7A8C6D;
            border-color: #7A8C6D;
            color: white;
        }
        .hero-section {
            background: linear-gradient(135deg, #9CAF88 0%, #7A8C6D 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
        }
        .feature-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-sage">
        <div class="container">
            <a class="navbar-brand" href="/">UTS VINA5208</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/products">Produk</a>
                @auth
                    <a class="nav-link" href="/admin/products">Admin</a>
                @endauth
            </div>
            <div class="navbar-nav ms-auto">
                @auth
                    <span class="navbar-text me-3">
                        Halo, <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->role }})
                    </span>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                    </form>
                @else
                    <a class="nav-link" href="/login">Login</a>
                    <a class="nav-link" href="/register">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">
                <strong>UTS Backend Developer - VINA5208</strong><br>
                <small class="text-muted">Dibuat dengan Laravel 10</small>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>