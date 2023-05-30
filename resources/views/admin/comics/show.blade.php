@extends('layouts.app')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <a name="" id="" class="btn btn-primary my-4" href="{{ Route('comics.index') }}"
            role="button">RETURN</a>
        <div class="row row-cols-3">
            <div class="col m-auto">
                <div class="card">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $comic->title }}</h4>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">{{ $comic->sale_date }}</p>
                        <p class="card-text">{{ $comic->type }}</p>
                        <p class="card-text">{{ $comic->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
