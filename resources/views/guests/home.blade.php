@extends('layouts.guests_app')
@section('header')
    
@endsection
@section('main')
    <h1>Comics</h1>
    <div class="comic_banner">
        @foreach ($comics as $comic)
            <img src="{{asset('storage/' . $comic->cover )}}" alt="">
            <a href="{{ route('comic', $comic) }}" class="link_comic">Vai al fumetto</a>
        @endforeach
    </div>
@endsection
