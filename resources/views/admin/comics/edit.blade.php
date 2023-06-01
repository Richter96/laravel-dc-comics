@extends('layouts.app')

@section('title')
CREATE NEW COMICS
@endsection

@section('content')
<a name="" id="" class="btn bg-violet-500 bg-warning btn-close-white" href="{{Route('comics.index')}}" role="button">INDIETRO</a>
<div class="container-sm container-edit shadow my-5 ">
    @include('partials.validation_errors')

    {{-- si cambia la rotta rispetto al create xk dovra dirottare verso update, inseriamo anche id perche la funzione update sa tramite id quale elemento andare ad aggiornare --}}
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        {{-- metod put serve perche ci sono tanti valori da modificare --}}
        @method('put')
        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" name=" title" id="title" aria-describedby="helpId" value="{{ (old('thumb', $comic->title)) }}">
            <small id="helpId" class="form-text text-muted">max 250 charatteri</small>
            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>Name, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- img --}}
        <div class="mb-3">
            <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">IMMGAIN</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId" value="{{(old('thumb', $comic->thumb))}}">
            <small id="helpId" class="form-text text-muted">inserire url dell'immagine</small>
            @error('thumb')
            <div class="alert alert-danger" role="alert">
                <strong>Image, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label @error('type') is-invalid @enderror">TIPOLOGIA</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" value="{{ (old('type', $comic->type)) }}">
            <small id="helpId" class="form-text text-muted">max 250 charatteri</small>
            @error('type')
            <div class="alert alert-danger" role="alert">
                <strong>Type, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label @error('description') is-invalid @enderror">DESCRIZIONE</label>
            <textarea class="form-control" name="description" id="description" rows="5">{{ (old('description', $comic->description)) }}"</textarea>
            @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>Type, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- DATE --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label description @error('sale_date') is-invalid @enderror">DATA</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" value="{{(old('sale_date', $comic->sale_date ))}}">
            <small id="helpId" class="form-text text-muted">dd-mm-yyyy</small>
            @error('sale_date')
            <div class="alert alert-danger" role="alert">
                <strong>Date, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label @error('price') is-invalid @enderror">PREZZO</label>
            <input type="number" step="0.1" class="form-control" name="price" id="price" aria-describedby="helpId" value="{{(old('price', $comic->price ))}}">
            <small id="helpId" class="form-text text-muted">prezzo max 999,99</small>
            @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>Price, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success m-1">MODIFICA COMIC</button>
                <a name="" id="" class="btn btn-danger" href="{{Route('comics.index')}}" role="button">ANNULLA</a>
            </div>
        </div>



    </form>
</div>
@endsection
