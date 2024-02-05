@extends('layouts.app')
  
@section('title', 'Show Crud')
  
@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $crud->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Content</label>
            <input type="text" name="content" class="form-control" placeholder="content" value="{{ $crud->content }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $crud->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $crud->updated_at }}" readonly>
        </div>
    </div>
@endsection