@extends('layouts.app')

@section('titole')
    COMIX
@endsection

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <a class="btn btn-primary" href="{{ route('comics.create') }}" role="button">New</a>

        <div class="table-responsive">
            <table class="table table-hover	
    table-borderless
    table-primary
    align-middle">
                <thead class="table-light">
                    <caption>COMICS ADMIN</caption>
                    <tr>
                        <th>ID</th>
                        <th>IMMAGINE</th>
                        <th>TITOLO</th>
                        <th>DESCRIZIONE</th>
                        <th>PREZZO</th>
                        <th>DATA DI RILASCIO</th>
                        <th>TIPO</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($comics as $comic)
                        <tr class="table-primary">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td><a name="" id="" class="btn btn-primary"
                                    href="{{ Route('comics.show', $comic->id) }}" role="button">VIEW</a>
                                <a name="" id="" class="btn btn-primary"
                                    href="{{ Route('comics.edit', $comic->id) }}" role="button">EDIT</a>

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $comic->id }}">
                                    DELETE
                                </button>
                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modal-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-{{ $comic->id }}">DELATE
                                                    {{ $comic->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want delete this element?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">yes!</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td scope="roe">NON CI SONO FUMETTI</td>
                        </tr>
                    @endforelse



                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>


        {{-- <div class="row">
            

        </div> --}}
    </div>
@endsection
