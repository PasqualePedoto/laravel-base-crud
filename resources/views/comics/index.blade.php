{{-- Extend Main Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title','All Comics')

{{-- Main Content --}}
@section('main-content')
    <main class="bg-dark text-white">
        <div class="container">
            <div class="row flex-wrap">
                @forelse($comics as $comic)
                    <div class="col my-4">
                        <figure class="m-0">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                        </figure>
                        <div class="d-flex align-items-center">{{ $comic->title }}</div>
                    </div>
                @empty
                    <p>Non ci sono comics</p>
                @endforelse
            </div>
        </div>
    </main>
@endsection