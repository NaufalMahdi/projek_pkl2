@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>

<p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>

{!! $post->body !!}


<a href="/posts">Back to Posts</a>
@endsection 