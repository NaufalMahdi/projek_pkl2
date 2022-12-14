@extends('dashboard.layouts.main')

@section('container')
<div class="container">
	<div class="row my-3">
		<div class="col-lg-8">
		<h2 class="mb-3">{{ $post->title }}</h2>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Ke Halaman Posts</a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Hapus</a>
		

			<img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" class="card-img-top" alt="{{ $post->kategori->name }}" class="img-fluid">
			{!! $post->body !!}
            <p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>

		</div>
	</div>
</div>

@endsection

