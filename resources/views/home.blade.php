@extends('layouts.main')

@section('content')

<div class="container text-center mt-5">

    <h1 class="display-4 fw-bold">
        Inventory App
    </h1>

    <p class="lead">
        Selamat datang pada aplikasi inventaris sederhana Laravel.
    </p>

    <div class="mt-4">
        <a href="/products" class="btn btn-primary btn-lg me-2">
            Kelola Produk
        </a>

        <a href="/categories" class="btn btn-success btn-lg">
            Kelola Kategori
        </a>
    </div>

    

</div>

@endsection