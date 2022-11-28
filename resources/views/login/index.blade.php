@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="row justify-content-center">
   
    <main class="col-md-6 mt-10">
        @if (session()->has('success'))      
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        
        @if (session()->has('loginError'))      
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('loginError') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form class="" method="post" >
         @csrf
          <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control @error('email')
              is-invalid
            @enderror" id="floatingInput" name="email" required autofocus placeholder="Username">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mt-1 mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="floatingPassword" required placeholder="Password">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingPassword">Password</label>
          </div>
      
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <small>Belum punya akun? <a href="/register">register disini</a></small>
        </form>
      </main>
    
</div>
@endsection