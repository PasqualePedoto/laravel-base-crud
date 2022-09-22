@extends('layouts.main')

@section('title',$comic->title)
@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <figure class="w-50 p-5">
                            <img src="{{ $comic->thumb }}" class="w-100 img-fluid" alt="{{ $comic->thumb }}">
                        </figure>
                        <div class="w-50">
                            <h1 class="card-title mb-5">{{ $comic->title }}</h1>
                            <div class="card-body mb-5">{{ $comic->description }}</div>
                            <div class="text-muted mb-5">{{ $comic->series }} | {{ $comic->type }}</div>
                            <div class="text-muted mb-5">{{ $comic->price }} | {{ $comic->sale_date }}</div>
                            <div>
                                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning  mb-1">Modifica</a>
                                <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-small" type="submit">Cancella</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
