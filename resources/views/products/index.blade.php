@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Daftar Produk</h1>
    @auth
        <a href="/admin/products" class="btn btn-sage">Kelola Produk</a>
    @else
        <a href="/login" class="btn btn-sage">Login untuk Kelola</a>
    @endauth
</div>

@if($products->count() > 0)
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card feature-card h-100">
                    <!-- Gambar Produk Lokal -->
                    @if($product->image)
                        <img src="{{ asset('storage/images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <span class="text-muted">No Image</span>
                        </div>
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">
                            <strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}<br>
                            <strong>Stok:</strong> {{ $product->stock }} item<br>
                            <strong>Deskripsi:</strong> 
                            <small class="text-muted">{{ Str::limit($product->description, 80) }}</small>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">ID: {{ $product->id }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="alert alert-info mt-3">
        <strong>Info:</strong> Menampilkan {{ $products->count() }} produk
    </div>
@else
    <div class="alert alert-info text-center">
        <h4>Belum ada produk</h4>
        <p>Silakan login sebagai admin untuk menambahkan produk pertama.</p>
        <div class="mt-3">
            <a href="/login" class="btn btn-sage me-2">Login Admin</a>
            <a href="/" class="btn btn-outline-secondary">Kembali ke Home</a>
        </div>
    </div>
@endif
@endsection