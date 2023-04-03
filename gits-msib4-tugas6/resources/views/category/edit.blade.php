@extends('layouts.app')

@section('content')
    <center>
        <h3 class="mb-3">Edit Category</h3>
    </center>

    @foreach ($categories as $category)    
        <form action="/category/{{ $category->id }}/update" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" value="{{ $category->name }}">  
            </div>
            <div class="mb-3">
                <label for="categoryDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="categoryDescription" name="categoryDescription" value="{{ $category->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @endforeach
@endsection