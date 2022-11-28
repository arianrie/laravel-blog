
@extends('layouts.main')
@include('partials.navbar')

@section('container')<h1>Post Categories</h1>

        <div class="row">
                @foreach ($categories as $category )
                       
                                <div class="col-md-3 mb-3 pb-3">
                                                        
                                        <div class="card text-bg-dark ">
                                                <img src="https://source.unsplash.com/500x200?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                                <div class="card-img-overlay">
                                                        <a class="fs-10 bold fw-bold text-decoration-none text-dark" href="/posts?category={{ $category->slug }}"> <h5 class="card-title">{{ $category->name }}</h5>
                                                        </a>
                                                        <p class="card-text">{{ $category->created_at->diffForHumans() }}</p>
                                              
                                                </div>
                                        </div>
                                </div>
                        
                @endforeach
        </div>

@endsection