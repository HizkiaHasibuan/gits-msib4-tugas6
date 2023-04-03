@extends('layouts.app')

@section('content')
    @php
      $no=1;  
    @endphp
    <center>
        <h3>Product List</h3>
    </center>
    <div>
        <a href="{{ url('/product/create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <div>
        <table class="table mt-2">
            <thead>
                <tr class="table-primary">
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="/product/{{ $product->id }}/edit" class="btn btn-warning">Edit</a>
                            <a href="/product/{{ $product->id }}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>      
                @endforeach
            </tbody>
        </table>
    </div>
@endsection