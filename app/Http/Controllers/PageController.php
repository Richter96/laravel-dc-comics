<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function comic()
    {
        $comics = Comic::all();

        // $comics = config('comics');  sbagliato

        // dd($comics);
        return view('comics', compact('comics'));
    }
}
