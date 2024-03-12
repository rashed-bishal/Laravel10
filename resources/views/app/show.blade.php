@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    Edit a post

    <a href="{{route('posts.index')}}" class="btn-sm btn-success">Back</a>

  </div>
  <div class="card-body">
  <div class="card" style="width: 18rem;">
  <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$post->category->name}}</h6>
    <p class="card-text">{{$post->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection