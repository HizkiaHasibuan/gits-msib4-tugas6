@extends('layouts.app')

@section('content')
    <h1>Homepage</h1>
    @auth
        <p>{{ Auth::user()->name }}</p>

        <p>Link github : <a href="https://github.com/HizkiaHasibuan/gits-msib4-tugas6">https://github.com/HizkiaHasibuan/gits-msib4-tugas6</a></p>

        <div class="row">
            
            {{-- @foreach ($products as $product)
            {{ $totalProduk++ }}
            @endforeach --}}
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Produk</h5>
                <h6 class="card-subtitle mb-2 text-muted">Total : {{ $products }}</h6>
                <a href="/product" class="card-link">Lihat Produk</a>
                </div>
            </div>

            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Kategori</h5>
                <h6 class="card-subtitle mb-2 text-muted">Total : {{ $categories }}</h6>
                <a href="/category" class="card-link">Lihat Kategori</a>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <p>Anda belum login</p>
    @endguest
@endsection