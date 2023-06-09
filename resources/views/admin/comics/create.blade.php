@extends('layouts.app')

@section('title')
CREATE NEW COMICS
@endsection

@section('content')
<div class="container">
    @include('partials.validation_errors')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="helpId" placeholder="Inserisci un titolo" value="{{ old('title') }}">
            <small id="helpId" class="form-text text-muted">max 100 charatteri</small>
            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>Name, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- img --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">IMMGAIN</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="helpId" placeholder="http://" value="{{ old('thumb') }}">
            <small id="helpId" class="form-text text-muted">inserire url dell'immagine</small>
            @error('thumb')
            <div class="alert alert-danger" role="alert">
                <strong>Image, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">TIPOLOGIA</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="helpId" placeholder="" value="{{ old('type') }}">
            <small id="helpId" class="form-text text-muted">max 50 charatteri</small>
            @error('type')
            <div class="alert alert-danger" role="alert">
                <strong>Type, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label">DESCRIZIONE</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5" placeholder="Inserisci qui la descrizione">{{ old('description') }}</textarea>
            @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>Description, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- DATE --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">DATA</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="" value="{{ old('sale_date') }}">
            <small id="helpId" class="form-text text-muted">dd-mm-yyyy</small>
            @error('sale_date')
            <div class="alert alert-danger" role="alert">
                <strong>Date, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>
        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">PREZZO</label>
            <input type="number" step="0.1" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="helpId" placeholder="999,99" value="{{ old('price') }}">
            <small id="helpId" class="form-text text-muted">prezzo max 999,99</small>
            @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>Price, Error:</strong>{{ $message }}
            </div>
            @enderror
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success m-1">UPLOAD</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <a name="" id="" class="btn btn-danger" href="{{Route('comics.index')}}" role="button">ANNULLA</a>
            </div>
        </div>



    </form>
</div>
@endsection
