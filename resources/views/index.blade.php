@extends('layouts.main')

@section('title','Home')

@section('main-content')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Type | Series</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($comics as $comic)
                      <tr>
                        <td class="d-flex align-items-center">
                            <figure class="m-0 me-3">
                                <img width=50 src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->thumb }}">
                            </figure>
                            {{ $comic->title }}
                        </td>
                        <td>{{ $comic->type }} | {{ $comic->series }}</td>
                        <td>{{ $comic->price }} &euro;</td>
                      </tr>
                    @empty
                      <p>Non ci sono risultati</p>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection