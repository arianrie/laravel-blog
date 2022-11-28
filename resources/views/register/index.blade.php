@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="row justify-content-center">

    <main class="col-md-6 mt-10">
        <form class="" action="/register" method="post">
            @csrf
          <h1 class="h3 mb-3 fw-normal">Register Form</h1>
      
          <div class="form-floating mb-1">
            <input type="text" class="form-control @error('name')is-invalid
                  @enderror" name="name" id="name" placeholder="name" required value="{{ old('name') }}">
                 @error('name')
                 <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                 <label for="floatingInput">Name</label>
            
          </div>
          <div class="form-floating">
            <input type="text" class="form-control @error('username')
                is-invalid
            @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingInput">username</label>
          </div>
          <div class="form-floating mt-1">
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror" id="email" name="email" placeholder="email" required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingPassword">Email</label>
          </div>
          <div class="form-floating mt-1 mb-3">
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror" id="password" name="password" placeholder="Password" required value="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingPassword">Password</label>
          </div>
      
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <small>Sudah punya akun? <a href="/login">login disini</a></small>
        </form>
      </main>
    
</div>
@endsection