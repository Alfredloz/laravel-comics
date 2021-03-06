<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {   
        $fewComics = Comic::take(4)->get();
        $comics = Comic::all();
        return view('guests.home', compact('comics', 'fewComics'));
    }
    public function show(Comic $comic)
    {
        return view('guests.singleComic', compact('comic'));
    }
    public function contacts()
    {
        return view('guests.contacts');
    }
}
