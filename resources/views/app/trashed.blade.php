@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    Trashed Posts

    <a href="{{route('posts.create')}}" class="btn-sm btn-success">Create</a>
    <a href="" class="btn-sm btn-warning">Trashed</a>
  </div>
  <div class="card-body">
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Published Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
        <img src="https://www.fervalle.com/wp-content/uploads/2022/07/transparent-orange-apple5eacfeae85ac29.7815306015883956945475.png" alt="" width="80">
      </td>
      <td>Title</td>
      <td>Description</td>
      <td>Category</td>
      <td>Published Date</td>
      <td>
      <a href="" class="btn-sm btn-success">Show</a>
        <a href="" class="btn-sm btn-primary">Edit</a>
        <a href="" class="btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    
  </tbody>
</table>
  </div>
</div>

@endsection