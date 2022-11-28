@extends('dashboard.layouts.main')

@section('container')


<a href="/dashboard/posts" class="badge bg-info">back to post</a>
<div class="container">
    <div class="row justify-content-center">
           <div class="row col-md-12">
                 
                  <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">
                  {!! $post->body !!}
                  <a class="d-block mt-2" href="/posts">Back To Posts </a>
           </div>
    </div>       
    </div>     

    @endsection