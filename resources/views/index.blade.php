@extends('layouts.main')

@section('title','Home')

@section('main-content')
<main class="bg-dark">
    <div class="container">
        <div class="row">
          @forelse($comics as $comic)
              <div class="col-2 my-4">
                  <a href="{{ route('comics.show',$comic) }}" class="text-decoration-none text-white">
                      <figure class="m-0">
                          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                      </figure>
                      <div class="d-flex align-items-center my-3">{{ $comic->title }}</div>
                  </a>
              </div>
              @empty
                  <p>Non ci sono comics</p>
          @endforelse
        </div>
    </div>
</main>
@endsection