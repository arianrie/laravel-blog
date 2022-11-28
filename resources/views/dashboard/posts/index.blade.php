@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/posts/create" class="badge bg-success">tambah post</a>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
<h2>Section title</h2>
@if (session()->has('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">tiile</th>
        <th scope="col">category</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($posts as $post)

     <tr>
        <td>
            {{ $loop->iteration }}
        </td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">lihat</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="border-0" onclick="return confirm('are you sure for delete data?')">Hapus</button>
            </form>
            
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-info">edit</a>

        </td>
      </tr>
        
     @endforeach
     
    </tbody>
  </table>
</div>
</main>
</div>
@endsection