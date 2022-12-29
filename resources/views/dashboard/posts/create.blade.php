@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
        </div>

<div class="col-lg-8">       
<form method="post" action="/dashboard/posts" class="mb-5">
@csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}"> 
    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}"> 
    @error('slug')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
    <select class="form-select" name="kategori_id">
      @foreach ( $kategoris as $kategori )
        @if(old('kategori_id') == $kategori->id)
        <option value="{{ $kategori->id }}" selected>{{ $kategori->name }}</option>
      @else
        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
      @endif  
      @endforeach
</select> 
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="body" type="hidden" name="body" value="{{ old('body') }}"  >
      <trix-editor input="body"></trix-editor>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script>
document.addEventListener('trix-file-accept', function(e) {
  e.preventDefault();
})

</script>
@endsection