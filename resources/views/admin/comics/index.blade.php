@extends('layouts.app')

@section('titole')
COMIX
@endsection

@section('content')
<div class=" container-xl">
    @if (session('message'))
    <div class="alert alert-success my-2" role="alert">
        <strong>{{ session('message') }}</strong>
    </div>
    @endif

    <a class="btn btn-primary my-3" href="{{ route('comics.create') }}" role="button">New Comic</a>

    <div class="table-responsive-xxl">
        <table class="table table-hover table-bordered table-dark ">
            <thead>
                <caption>COMICS ADMIN</caption>
                <tr class="text-center">
                    <th>ID</th>
                    <th>IMMAGINE</th>
                    <th>TITOLO</th>
                    <th>DESCRIZIONE</th>
                    <th>PREZZO</th>
                    <th class=" px-4">DATA DI RILASCIO</th>
                    <th>TIPO</th>
                    <th class="col-2">ACTION</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($comics as $comic)
                <tr class="">
                    <td scope="row">{{ $comic->id }}</td>
                    <td><img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>${{ $comic->price }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td class="">
                        <div class="row row-cols-3">

                            <div class="icon d-inline">
                                <a name="" id="" class="bg-violet-500 btn btn-primary w-1rem" href="{{ Route('comics.show', $comic->id) }}" role="button"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                            </div>

                            <div class="icon d-inline">
                                <a name="" id="" class="bg-violet-500 btn btn-primary w-1rem" href="{{ Route('comics.edit', $comic->id) }}" role="button"><i class="fas fa-pencil fa-sm fa-fw"></i></a>
                            </div>

                            <div class="icon d-inline">
                                <!-- Modal trigger button -->
                                <button type="button" class="bg-violet-500 btn btn-danger btn-lg ratio-1x1 w-1rem p-0" data-bs-toggle="modal" data-bs-target="#modal-{{ $comic->id }}">
                                    <i class="fas fa-trash fa-sm fa-fw w-50"></i>
                                </button>
                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modal-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark text-bg-danger" id="modal-{{ $comic->id }}">
                                                    {{ $comic->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-danger">
                                                Are you sure you want delete this element?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary bg-violet-500" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">yes!</button>
                                                </form>
                                            </div>
                                        </div>
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
