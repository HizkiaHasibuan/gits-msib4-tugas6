@extends('layouts.app')

@section('content')
    <center>
        <h3 class="mb-3">Add Product</h3>
    </center>

    <form action="{{ url('/product/add') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName">  
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <input type="numeric" class="form-control" id="productPrice" name="productPrice">  
        </div>
        <div class="mb-3">
            <label for="productCategory" class="form-label">Product Category</label>
            <select class="form-select" aria-label="Default select example" name="productCategory">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                {{-- {{ $product->category_id == $categories->id ? 'selected' : '' }}> --}}
              </select>
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="productDescription" name="productDescription"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection