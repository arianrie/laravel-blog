
@extends('layouts.main')
@include('partials.navbar')

@section('container')
<h2 class="justify-text-center">{{ $title }}</h2>
<div class="row">
   <div class="col-md-6 justify-content-center">
      <form action="/posts" method="get">
         @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
         @endif
         @if (request('author'))  
         <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
         <div class="input-group mb-3">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
            <button class="btn btn-info"  type="submit">Search</button>
          </div>
      </form>
   </div>
</div>

@if ($posts->count())
<div class="card mb-5">
   <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
   <div class="card-body text-center" >
     <h5 class="card-title"><a class="text-dark text-decoration-none" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
     <p>
      <small class="text-muted">
      By: <a href="/posts?author={{  $posts[0]->author->username }}" class="text-decoration-none">{{  $posts[0]->author->name }}</a> in  <a style="text-decoration: none" href="/posts?category={{  $posts[0]->category->slug }}">{{  $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small>
   </p>
     <p class="card-text">{{ $posts[0]->excerpt }}</p>
     <a class=" mt-1 text-decoration-none btn btn-primary"  href="/post/{{ $posts[0]->slug }}">Read More</a>
   </div>
 </div>
 <div class="row">
   @foreach ($posts->skip(1) as $post )
   <div class="col-md-4">
      <div class="card mb-3">
         <div class="position-absolute py-2 px-3 text-white" style="background: rgba(0, 0, 0, 0.7)"><a class="text-decoration-none text-white" href="/posts?category={{  $post->category->slug }}">{{ $post->category->name }}</a></div>
         <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
         <div class="card-body">
           <h5 class="card-title">{{ $post['title'] }}</h5>
           <p>
            <small class="text-muted">
            By: <a href="/posts?author={{  $post->author->username }}" class="text-decoration-none">{{  $post->author->name }}</a> in  <a style="text-decoration: none" href="/posts?category={{  $post->category->slug }}">{{  $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
            </small>
         </p>
           <p class="card-text">{{ substr($post->excerpt,0, 100) }}.... </p>
           <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
         </div>
       </div>
   </div>
   @endforeach
</div>
@else
   <p class="text-center fs-4">Post Not Found.</p>
@endif

{{ $posts->links() }}

   


@endsection