
 @extends('layouts.main')

 @section('container')

 <h1 class="mb-5">Kumpulan Data Pada Kabupaten Lumajang</h1>

@if ($posts->count())

 <div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->kategori->name }}" class="card-img-top" alt="{{ $posts[0]->kategori->name }}">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
    <p>
    <small class="text-muted">
      Kategori : <a href="/kategories/{{ $posts[0]->kategori->slug }} ">{{ $posts[0]->kategori->name }} </a>
    </small>
   </p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Baca Selanjutnya</a>
    <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
 
   </div>
</div>
@else
   <p class="text-center fs-4"> No post found.</p>
@endif

<div class="container">
   <div class="row">
   @foreach ($posts->skip(1) as $post)

      <div class="col-md-4 mb-3">
      <div class="card">
      <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">{{ $post->kategori->name }}</div>
      <img src="https://source.unsplash.com/500x400?{{ $post->kategori->name }}" class="card-img-top" alt="{{ $post->kategori->name }}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p>
    <small class="text-muted">
      Kategori : <a href="/kategories/{{ $posts[0]->kategori->slug }} ">{{ $post->kategori->name }} </a>
    </small>
   </p>
    <p class="card-text">{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
    <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
   </div>
</div>  
    </div>
    @endforeach
  </div>
</div>
    

 @endsection