<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        $comics = Comic::all();
        return view('guests.home', compact('comics'));
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
