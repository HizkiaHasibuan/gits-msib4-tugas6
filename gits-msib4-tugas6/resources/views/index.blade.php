@extends('layouts.app')

@section('content')
    <h1>Homepage</h1>
    @auth
        <p>{{ Auth::user()->name }}</p>

        <div class="row">
            @foreach ($products as $product)
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Rp.{{ $product->price }}</h6>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="/cart/{{ $product->id }}/add" class="card-link">Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth
    @guest
        <p>Anda belum login</p>
    @endguest
@endsection