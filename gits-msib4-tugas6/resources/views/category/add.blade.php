@extends('layouts.app')

@section('content')
    <center>
        <h3 class="mb-3">Add Category</h3>
    </center>

    <form action="{{ url('/category/add') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryName" name="categoryName">  
        </div>
        <div class="mb-3">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="categoryDescription" name="categoryDescription"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection