@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <main>
    <h1 class="h2">Create Posts</h1>
</main>
</div>

<div class="col-md-8">
    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Tittle</label>
          <input type="text" name="title" class="form-control @error('title')
            is-invalid            
          @enderror" id="title" name="title" value="{{ old('title') }}" >
          @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          
     
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control  @error('slug')
            is-invalid
          @enderror" id="slug" value="{{ old('slug') }}" >
            @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <img class="img-preview img-flud col-sm-5 mb-3">
            <input class="form-control @error('image')
            is-invalid
          @enderror" name="image" type="file" id="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
          
            <select name="category_id" class="form-control" id="category" >
             @foreach ($categories as $category)
             @if (old('category_id') === $category->id)
               <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
             @else
               <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endif
             @endforeach
            </select>
          </div>
          <div class="mb-3">
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <input id="body" name="body"  value="{{ old('body') }}" type="hidden" name="content">
          <trix-editor name="body" input="body"></trix-editor>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener("keyup", function() {
      let preslug = title.value;
      preslug = preslug.replace(/ /g,"-");
      slug.value = preslug.toLowerCase();
  });

  function previewImage(){
  const image = document.querySelector('#image')
  const imgPreview = document.querySelector('.img-preview')
  const oFReader = new FileReader()

  const blob = URL.createObjectURL(image.files[0]);
       imgPreview.src = blob;
       imgPreview.style.display = 'block';
  }
  
</script>
@endsection