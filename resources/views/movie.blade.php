@extends('layout.main')

@section('title', 'Movie')

@section('content')

    <h1 class="text-center">Film</h1>

    <div class="mt-3 d-flex flex-wrap gap-4 justify-content-center">

        @foreach ($movies as $movie)

            <div class="card film-card position-relative" style="width: 18rem;">
                <img src="https://picsum.photos/200/150" class="card-img-top" alt="...">
                <div class="no-img-advs fw-bold position-absolute"><span class="text-white">Nessuna Immagine</span></div>
                <div class="film-vote text-center fw-bold">
                    <span>{{ $movie->vote }}</span>
                </div>
                <div class="card-body">
                    <p class="text-end text-muted lh-1 m-0">{{ $movie->date }}</p>
                    <h4>{{ $movie->title }}</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium adipisci non rerum, illo laborum recusandae. Minus nisi totam ut.</p>

                </div>
            </div>

        @endforeach

    </div>

@endsection



