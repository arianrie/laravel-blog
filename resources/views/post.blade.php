
@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="container">
<div class="row justify-content-center">
       <div class="row col-md-12">
             <h4> {{ $post->title }}</h4>
              <p>by : <a href="/posts?user={{ $post->user }}" class="text-decoration-none ">{{ $user }}</a> in <a class="text-decoration-none " href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
             
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">
              {!! $post->body !!}
              <a class="d-block mt-2" href="/posts">Back To Posts </a>
       </div>
</div>       
</div>      

@endsection