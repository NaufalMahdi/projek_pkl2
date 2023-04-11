@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>


                <p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" class="card-img-top"
                    alt="{{ $post->kategori->name }}" class="img-fluid">

                {!! $post->body !!}
                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
