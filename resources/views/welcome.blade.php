@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">UTS VINA5208</h1>
        <p class="lead">Sistem Manajemen Produk - Backend Developer</p>
        <div class="mt-4">
            <a href="/products" class="btn btn-light btn-lg me-2">Lihat Produk</a>
            @auth
                <a href="/admin/products" class="btn btn-outline-light btn-lg">Panel Admin</a>
            @else
                <a href="/login" class="btn btn-outline-light btn-lg">Login Admin</a>
            @endauth
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="container">
    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="feature-card card h-100">
                <div class="card-body">
                    <h5 class="card-title">CRUD Products</h5>
                    <p class="card-text">Fitur lengkap Create, Read, Update, Delete untuk manajemen produk</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card card h-100">
                <div class="card-body">
                    <h5 class="card-title">Authentication</h5>
                    <p class="card-text">Sistem login/register dengan Laravel Breeze dan role management</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card card h-100">
                <div class="card-body">
                    <h5 class="card-title">Form Validation</h5>
                    <p class="card-text">Validasi form input dengan error handling yang user-friendly</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-sage text-white">
                    <h5 class="mb-0">Statistik Sistem</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h3>{{ \App\Models\Product::count() }}</h3>
                            <p class="text-muted">Total Produk</p>
                        </div>
                        <div class="col-md-3">
                            <h3>{{ \App\Models\User::count() }}</h3>
                            <p class="text-muted">Pengguna</p>
                        </div>
                        <div class="col-md-3">
                            <h3>3</h3>
                            <p class="text-muted">Fitur Utama</p>
                        </div>
                        <div class="col-md-3">
                            <h3>100%</h3>
                            <p class="text-muted">Laravel 10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Demo Access -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-sage text-white">
                    <h5 class="mb-0">Demo Akses Sistem</h5>
                </div>
                <div class="card-body">
                    <p>Login sebagai admin untuk mengelola produk:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Admin Access:</strong><br>
                            Email: ezkap@uts.com<br>
                            Password: 12345678
                        </div>
                        <div class="col-md-6">
                            <strong>Staff Access:</strong><br>
                            Email: vina@uts.com<br>
                            Password: 12345678
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection