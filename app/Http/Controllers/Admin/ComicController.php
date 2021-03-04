<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $comics = Comic::all();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required | numeric',
            'trim_size' => 'required',
            'page_content' => 'nullable',
            'rating' => 'required',
            'cover' => 'required | image | max:700',
            'available' => 'nullable',
        ]);
        $cover = Storage::put('cover_imgs', $request->cover);
        $data['cover'] = $cover;
        Comic::create($data);
        $new_comic = Comic::all();
        return redirect()->route('admin.comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        // dd($request->all());
       Storage::delete($comic->cover);

        $data = $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'price' => 'nullable',
            'trim_size' => 'nullable',
            'page_content' => 'nullable',
            'rating' => 'nullable',
            'cover' => 'nullable | image | max:700',
            'available' => 'nullable',
        ]);
        $cover = Storage::disk('public')->put('cover_imgs', $request->cover);
        // dd($cover);
        // dd($cover);
        $data['cover'] = $cover;
        $comic->update($data);
        return redirect()->route('admin.comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
