<?php

namespace App\Http\Controllers;
use App\Comic;
use App\FakerComic;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {   
        $fewComics = Comic::take(4)->get();
        $comics = Comic::all();
        $fakeComics = FakerComic::all();
        $fake_3 = FakerComic::take(3)->get();
        return view('guests.home', compact('comics', 'fewComics', 'fakeComics', 'fake_3'));
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
