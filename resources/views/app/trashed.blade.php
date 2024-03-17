@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    Trashed Posts

    <a href="{{route('posts.create')}}" class="btn-sm btn-success">Create</a>
    <a href="{{route('posts.index')}}" class="btn-sm btn-warning">All Posts</a>
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

  @if($posts->isNotEmpty())
      @foreach($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>
          <img src="{{asset($post->image)}}" alt="" width="80">
        </td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->category->name}}</td>
        <td>{{$post->created_at}}</td>
        <td>
        <form action="{{route('posts.recover', $post->id)}}" method="POST">
            @csrf @method('PATCH')
            <button type="submit" class="btn-sm btn-primary">Recover</button>
          </form>
          <form action="{{route('posts.force_delete', $post->id)}}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn-sm btn-danger">Permanently Delete</button>
          </form>
        </td>
    </tr>
      @endforeach
  @endif
  </tbody>
</table>
  </div>
</div>

@endsection