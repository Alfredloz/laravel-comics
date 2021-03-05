@extends('layouts.guests_app')
@section('header')
    
@endsection
@section('main')
    <h1 class="title">Comics</h1>
    <div class="comic_banner">
        @foreach ($comics as $comic)
            
            <div class="card_comic">
                <a href="{{ route('comic', $comic) }}">
                    <img src="{{asset('storage/' . $comic->cover )}}" alt="">
                </a>
            </div>
        @endforeach
    </div>
@endsection
