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
          {{-- Add new comic --}}
          <div class="col-2 my-4 add-comics d-flex align-items-center justify-content-center flex-column">
            <a href="{{ route('comics.create',$comic) }}" class="text-decoration-none text-white ">
                <p>Create New Comic!!</p>
                <div class="d-flex justify-content-center"><i class="fa-solid fa-square-plus fa-3x"></i></div>
            </a>
        </div>
        </div>
    </div>
</main>
@endsection