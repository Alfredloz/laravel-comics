@extends('layouts.guests_app')
@section('header')
    
@endsection
@section('main')
    <div class="title_home">
        <h1 class="title">Comics & Graphics Novels</h1>
    </div>
    <div class="comic_banner">
        @foreach ($fewComics as $comic)
            
            <div class="card_comic">
                <a href="{{ route('comic', $comic) }}">
                    <img src="{{asset('storage/' . $comic->cover )}}" alt="">
                </a>
                <h5 class="title_card">COMIC BOOK</h5>
            </div>
        @endforeach
    </div>
@endsection
