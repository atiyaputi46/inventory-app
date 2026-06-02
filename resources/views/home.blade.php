@extends('layouts.main')

@section('content')

<div class="container text-center mt-5">

    <h1 class="display-5">
        Inventory App
    </h1>

    <p class="text-muted">
        Selamat datang pada aplikasi inventaris sederhana Laravel.
    </p>

    <a href="/products" class="btn btn-primary">
        Kelola Produk
    </a>

    <a href="/categories" class="btn btn-success">
        Kelola Kategori
    </a>

</div>

<div class="bg-dark text-white text-center py-2 fixed-bottom">
    © 2026 Inventory App - Manajemen Informatika PNP
</div>

@endsection