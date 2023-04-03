@extends('layouts.app')

@section('content')
    <center>
        <h3 class="mb-3">Edit Product</h3>
    </center>

    @foreach ($products as $product)
    {{-- @dd($products) --}}
        <form action="/product/{{ $product->id }}/update" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName" value="{{ $product->name }}">  
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="numeric" class="form-control" id="productPrice" name="productPrice" value="{{ $product->price }}">  
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Product Category</label>
                {{-- @dd($product) --}}
                <select class="form-select" aria-label="Default select example" name="productCategory">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                    {{-- {{ $product->category_id == $categories->id ? 'selected' : '' }}> --}}
                </select>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="productDescription" name="productDescription" value="{{ $product->description }}">
            </div>
    @endforeach
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection