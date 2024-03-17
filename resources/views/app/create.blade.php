@extends('layouts.master')

@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

<div class="card">
  <div class="card-header">
    Create a post

    <a href="" class="btn-sm btn-success">Back</a>

  </div>
  <div class="card-body">
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="category" class="form-label">Category</label>
            <select name="category_id" class="form-control" id="">
                <option value="">Select a category</option>
                @isset($categories)
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
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