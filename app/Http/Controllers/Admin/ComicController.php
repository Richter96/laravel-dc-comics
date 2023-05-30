<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use App\Http\Controllers\Controller;



class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        // dd($comics);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // dd($request->all());
        $dataForm = [
            /* 'chiave database' => $request -> "name"(del form)  */
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'sale_date' => $request->sale_date,
            'price' => '$' . $request->price,
        ];
        // nel database comic crea una nuova riga con i dati.
        Comic::create($dataForm);
        // riindirizziaom verso la route principale
        return to_route('comics.index')->with('message', 'comics add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $dataForm = [
            /* 'chiave database' => $request -> "name"(del form)  */
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'sale_date' => $request->sale_date,
            'price' => '$' . $request->price,
        ];

        $comic->update($dataForm);
        return to_route('comics.index')->with('message', 'comics edit succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', 'comics delete succesfull');
    }
}
