@extends('layouts.main')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Barang Inventaris</h5>
        <a href="{{ url('/insert') }}" class="btn btn-light btn-sm">Tambah Data Otomatis</a>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name ?? '-' }} [cite: 136]</td>
                        <td>{{ $product->description ?? '-' }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }} [cite: 137]</td>
                        <td>{{ $product->stock }} [cite: 138]</td>
                        <td>
                            <span class="badge {{ $product->status == 'tersedia' ? 'bg-success' : 'bg-danger' }}">
                                {{ ucfirst($product->status) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-end">
            {{ $products->links() }} [cite: 144]
        </div>

    </div>
</div>

@endsection