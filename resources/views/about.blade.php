@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>

@endsection