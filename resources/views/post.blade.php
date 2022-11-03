@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>

<p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>

{!! $post->body !!}
<table class="table table-bordered">
					<tr>
						<th>NO</th>
                        <th>Kecamatan</th>
						<th>Jumlah</th>
						
					</tr>

<a href="/posts">Back to Posts</a>
@endsection 