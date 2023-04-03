@extends('layouts.app')

@section('content')
    @php
      $no=1;  
    @endphp
    <center>
        <h3>Product List</h3>
    </center>
    <div>
        <table class="table mt-2">
            <thead>
                <tr class="table-primary">
                <th scope="col">No</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $cart->product->name }}</td>
                        <td>{{ $cart->product->price }}</td>
                        <td>{{ $cart->product->category->name }}</td>
                        <td>{{ $cart->product->description }}</td>
                        <td>
                            <div class="col">
                                <a href="/cart/{{ $cart->product_id }}/min" class="btn btn-primary bi bi-dash" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"></a>
                                {{ $cart->qty }}
                                <a href="/cart/{{ $cart->product_id }}/plus" class="btn btn-primary bi bi-plus" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"></a>
                            </div>
                            {{-- <a href="/product/{{ $product->id }}/edit" class="btn btn-warning">Edit</a>
                            <a href="/product/{{ $product->id }}/delete" class="btn btn-danger">Delete</a> --}}
                        </td>
                    </tr>      
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        <h2>TOTAL : Rp.{{ $totalPrice }}</h2>
    </div>
@endsection