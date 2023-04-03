@extends('layouts.app')

@section('content')
    @php
      $no=1;  
    @endphp
    <center>
        <h3>Category List</h3>
    </center>
    <div>
        <a href="{{ url('/category/create') }}" class="btn btn-primary">Add Category</a>
    </div>
    <div>
        <table class="table mt-2">
            <thead>
                <tr class="table-primary">
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="/category/{{ $category->id }}/edit" class="btn btn-warning">Edit</a>
                            <a href="/category/{{ $category->id }}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>      
                @endforeach
            </tbody>
        </table>
    </div>
@endsection