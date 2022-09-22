{{-- Estendiamo il layout base --}}
@extends('layouts.main')

{{-- Inseriamo il title --}}
@section('title','edit')

{{-- Main Content - Edit --}}
@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="d-flex align-items-center justify-content-center my-5">Modifica <strong class="ms-3">{{ $comic->title }}</strong></h1>
                    <form action="{{ route('comics.update', $comic) }}" method="POST" class="d-flex align-items-center justify-content-center flex-wrap">
                        @csrf
                        @method('PUT')
                        {{-- Title --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                            </div>
                        </div>
                        {{-- Description --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
                            </div>
                        </div>
                            {{-- Thumb --}}
                            <div class="mb-3 row p-3 w-50">
                                <label for="thumb" class="col-sm-2 col-form-label">Thumb</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                                </div>
                            </div>
                            {{-- Price --}}
                            <div class="mb-3 row p-3 w-50">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                                </div>
                            </div>
                            {{-- Series --}}
                            <div class="mb-3 row p-3 w-50">
                                <label for="series" class="col-sm-2 col-form-label">Series</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                                </div>
                            </div>
                            {{-- Sale Date --}}
                            <div class="mb-3 row p-3 w-50">
                                <label for="sale_date" class="col-sm-2 col-form-label">Sale Date</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                                </div>
                            </div>
                            {{-- Type --}}
                            <div class="mb-3 row p-3 w-50">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                                </div>
                            </div>
                            {{-- Button --}}
                            <div class="mb-3 row p-3 w-50">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button class="btn btn-small btn-primary me-3" type="submit">Modify</button>
                                    <button class="btn btn-small btn-secondary" type="reset">Reset</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
    
