@extends('layouts.app')

@section('title')
    CREATE NEW COMICS
@endsection

@section('content')
    <div class="container">
        {{-- si cambia la rotta rispetto al create xk dovra dirottare verso update, inseriamo anche id perche la funzione update sa tramite id quale elemento andare ad aggiornare --}}
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            {{-- metod put serve perche ci sono tanti valori da modificare --}}
            @method('put')
            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">TITOLO</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    value="{{ $comic->title }}">
                <small id="helpId" class="form-text text-muted">max 250 charatteri</small>
            </div>
            {{-- img --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">IMMGAIN</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    value="{{ $comic->thumb }}">
                <small id="helpId" class="form-text text-muted">inserire url dell'immagine</small>
            </div>
            {{-- type --}}
            <div class="mb-3">
                <label for="type" class="form-label">TIPOLOGIA</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    value="{{ $comic->type }}">
                <small id="helpId" class="form-text text-muted">max 250 charatteri</small>
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">DESCRIZIONE</label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ $comic->description }}"</textarea>
            </div>
            {{-- DATE --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">DATA</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                    value="{{ $comic->sale_date }}">
                <small id="helpId" class="form-text text-muted">dd-mm-yyyy</small>
            </div>
            {{-- price --}}
            <div class="mb-3">
                <label for="price" class="form-label">PREZZO</label>
                <input type="number" step="0.1" class="form-control" name="price" id="price"
                    aria-describedby="helpId" value="{{ $comic->price }}">
                <small id="helpId" class="form-text text-muted">prezzo max 999,99</small>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-success m-1">EDIT COMIC</button>
                </div>
            </div>



        </form>
    </div>
@endsection
