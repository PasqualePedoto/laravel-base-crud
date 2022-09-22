{{-- Extend Main Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title','All Comics')

{{-- Main Content --}}
@section('main-content')
    <main class="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="my-5 text-center fw-bold">All Comics</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Type | Series</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($comics as $comic)
                        <tr>
                            <a href="#">
                                <td class="d-flex align-items-center">
                                    <figure class="m-0 me-3">
                                        <img width=50 src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->thumb }}">
                                    </figure>
                                    {{ $comic->title }}
                                </td>
                                <td>{{ $comic->type }} | {{ $comic->series }}</td>
                                <td>{{ $comic->price }} &euro;</td>
                                <td class="d-flex align-items-center justify-content-center h-100">
                                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning btn-small me-3">Modifica</a>
                                    <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-small" type="submit">Cancella</button>
                                    </form>
                                </td>
                            </a>
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