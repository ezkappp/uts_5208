@extends('layouts.app')

@section('title', 'Kelola Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Kelola Produk - Admin Panel</h1>
    <a href="/admin/products/create" class="btn btn-sage">+ Tambah Produk</a>
</div>

@if($products->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{ $product->name }}" style="width: 60px; height: 60px; object-fit: cover;" class="rounded">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ Str::limit($product->description, 50) }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/admin/products/edit/{{ $product->id }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/admin/products/delete/{{ $product->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('Yakin hapus produk {{ $product->name }}?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-3">
        <p class="text-muted">Total: {{ $products->count() }} produk</p>
    </div>
@else
    <div class="alert alert-info text-center">
        <h4>Belum ada produk</h4>
        <p>Silakan tambah produk pertama Anda.</p>
        <a href="/admin/products/create" class="btn btn-sage">Tambah Produk Pertama</a>
    </div>
@endif
@endsection