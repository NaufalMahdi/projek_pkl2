@extends('layouts.main')

@section('content')
    <H1>Halaman About</H1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumnail rounded-circle">
@endsection
