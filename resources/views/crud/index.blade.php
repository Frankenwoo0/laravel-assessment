@extends('layouts.app')

  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Crud</h1>
        <a href="{{ route('crud.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Updated At</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if($crud->count() > 0)
                @foreach($crud as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->content }}</td>
                        <td class="align-middle">{{ $rs->created_at }}</td>
                        <td class="align-middle">{{ $rs->updated_at }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('crud.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('crud.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('crud.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection