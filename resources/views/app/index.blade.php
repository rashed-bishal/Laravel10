@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    All Posts of {{auth()->user()->name}}
    @can('create_post')
    <a href="{{route('posts.create')}}" class="btn-sm btn-success">Create</a>
    @endcan
    @can('delete_post')
    <a href="{{route('posts.trashed')}}" class="btn-sm btn-warning">Trashed</a>
    @endcan
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
        <a href="{{route('posts.show', $post->id)}}" class="btn-sm btn-success">Show</a>
          @can('edit_post')
          <a href="{{route('posts.edit', $post->id)}}" class="btn-sm btn-primary">Edit</a>
          @endcan
          @can('delete_post')
          <form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn-sm btn-danger">Delete</button>
          </form>
          @endcan
        </td>
    </tr>
      @endforeach
  @endif
  </tbody>
</table>
{{$posts->links()}}
  </div>
</div>

@endsection