@extends('layouts.app')

@section('title')
    CREATE NEW COMICS
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">TITOLO</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Inserisci un titolo">
                <small id="helpId" class="form-text text-muted">max 250 charatteri</small>
            </div>
            {{-- img --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">IMMGAIN</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    placeholder="http://">
                <small id="helpId" class="form-text text-muted">inserire url dell'immagine</small>
            </div>
            {{-- type --}}
            <div class="mb-3">
                <label for="type" class="form-label">TIPOLOGIA</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    placeholder="">
                <small id="helpId" class="form-text text-muted">max 250 charatteri</small>
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">DESCRIZIONE</label>
                <textarea class="form-control" name="description" id="description" rows="5">inserisci qui la descrizione</textarea>
            </div>
            {{-- DATE --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">DATA</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                    placeholder="">
                <small id="helpId" class="form-text text-muted">dd-mm-yyyy</small>
            </div>
            {{-- price --}}
            <div class="mb-3">
                <label for="price" class="form-label">PREZZO</label>
                <input type="number" step="0.1" class="form-control" name="price" id="price"
                    aria-describedby="helpId" placeholder="999,99">
                <small id="helpId" class="form-text text-muted">prezzo max 999,99</small>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-success m-1">UPLOAD</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>



        </form>
    </div>
@endsection
