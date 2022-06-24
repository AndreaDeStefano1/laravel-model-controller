@extends('layout.main')

@section('title', 'Home')

@section('content')
<div class="px-4   text-center">
    <img class="d-block mx-auto mb-4" src="https://picsum.photos/500/300" alt="">
    <h1 class="display-5 fw-bold">Laravel show us the Movies</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quidem minima molestiae esse illum maiores molestias corrupti laboriosam beatae sunt, delectus porro unde harum dolore iure animi accusamus asperiores dolorum inventore ab. Reprehenderit, eveniet, rem maxime fugit tenetur beatae nobis ullam, iste et voluptas tempore nulla blanditiis explicabo!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a class="text-white fw-bold" href="{{ route('movie') }}">FILMS</a></button>
      </div>
    </div>
  </div>
@endsection
