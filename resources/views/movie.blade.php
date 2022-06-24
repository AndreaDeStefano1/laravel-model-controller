@extends('layout.main')

@section('title', 'Movie')

@section('content')
    <h1>Film</h1>
    @foreach ($movies as $movie)
        <ul>
            <li>Nome: {{ $movie->title }}</li>
            <li>Data di uscita: {{ $movie->title }}</li>
            <li>Voto dellla critica: {{ $movie->vote }}</li>
        </ul>
    @endforeach
@endsection
