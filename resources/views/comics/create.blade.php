@extends('layouts.main')

@section('title','New Comic')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{ route('comics.store') }}" method="POST" class="d-flex align-items-center flex-wrap mt-5">
                        @csrf
                        {{-- Title --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        {{-- Description --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        {{-- Thumb --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="thumb" class="col-sm-2 col-form-label">Thumb</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="thumb" name="thumb">
                            </div>
                        </div>
                        {{-- Price --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                        </div>
                        {{-- Series --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="series" class="col-sm-2 col-form-label">Series</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="series" name="series">
                            </div>
                        </div>
                        {{-- Sale Date --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="sale_date" class="col-sm-2 col-form-label">Sale Date</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sale_date" name="sale_date">
                            </div>
                        </div>
                        {{-- Type --}}
                        <div class="mb-3 row p-3 w-50">
                            <label for="type" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="type" name="type">
                            </div>
                        </div>
                        <div class="mb-3 row p-3 w-50">
                            <div class="d-flex align-items-center justify-content-end">
                                <button class="btn btn-small btn-primary me-3" type="submit">Add</button>
                                <button class="btn btn-small btn-secondary" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
