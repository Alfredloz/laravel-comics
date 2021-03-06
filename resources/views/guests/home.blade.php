@extends('layouts.guests_app')
@section('header')
    
@endsection
@section('main')
    <div class="title_home">
        <h1 class="title txt_upp">Comics & Graphics Novels</h1>
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
    <section class="must_box">
        <h2 class="txt_upp">must read</h2>
        <div class="must_section d_flex">
            @foreach ($fake_3 as $comic)
                <div class="card_must">
                    <img src="{{ $loop->first ?  'img/mr_miracle.jpg' : $comic->img }}" alt="">
                    {{-- <img src="{{ $loop->count == 1 ?  'img/mr_miracle.jpg' : '' }}" alt=""> --}}
                <h5>{{ $comic->title }}</h5>
                <p>{{ $comic->about  }}</p>
                </div>
            @endforeach
            </div>
    </section>
    <section class="current_box">
        <h2 class="txt_upp current_title">current series</h2>
    <div class="current_section d_flex">
        @foreach ($fakeComics as $comic)
        <div class="card_must">
            <img src="{{ $loop->last ?  'img/mr_miracle.jpg' : $comic->img }}" alt="">
            {{-- <img src="{{ $loop->count == 1 ?  'img/mr_miracle.jpg' : '' }}" alt=""> --}}
        <h5>{{ $comic->title }}</h5>
        <p>{{ $comic->about  }}</p>
        </div>
    @endforeach
    </div>
    </section>
@endsection
