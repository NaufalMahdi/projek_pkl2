
 @extends('layouts.main')

 @section('container')

 <h1 class="mb-5">Kumpulan Data Pada Kabupaten Lumajang</h1>

    @foreach ($posts as $post)

    <article class="mb-5 border-bottom pb-4">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>

    <p>Kategori : <a href="/kategories/{{ $post->kategori->slug }} ">{{ $post->kategori->name }} </a></p>
    
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}">Baca Selanjutnya</a>
    </article>
    @endforeach

 @endsection