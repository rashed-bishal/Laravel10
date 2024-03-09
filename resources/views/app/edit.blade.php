@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    Edit a post

    <a href="" class="btn-sm btn-success">Back</a>

  </div>
  <div class="card-body">
    <img src="{{asset($post->image)}}" alt="Image not found" width="100"/>
    <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control""/>
        </div>
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}"/>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="category" class="form-label">Category</label>
            <select name="category_id" class="form-control" id="">
                <option value="">Select a category</option>
                @isset($categories)
                    @foreach($categories as $category)
                        <option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @endisset
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="" class="btn btn-primary"/>
        </div>
    </form>
  </div>
</div>

@endsection