@extends('layouts.app')

@section('content')
    <div class="card">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h1>Titolo:</h1>
            <img src="{{asset('storage/' . $comic->banner )}}" alt="" id="banner_img">
            <img src="{{asset('storage/' . $comic->cover )}}" alt="">
            <h4 class="card-title">{{$comic->title}}</h4>
            <h2>Descrizione: </h2>
            <p class="card-text">{{$comic->description}}</p>
            <h3>Artista:</h3>
            <dd>{{$comic->art_by}}</dd>
            <h4>Scritto da:</h4>
            <dd>{{$comic->written_by}}</dd>
            <h5>Prezzo: </h5>
            <dd>{{ $comic->price}} €</dd>
            <h5>Data di rilascio: </h5>
            <dd>{{ $comic->release_date }}</dd>
            <h5>Volume </h5>
            <dd>{{ $comic->volume}}</dd>
            <h5>Formato </h5>
            <dd>
                @if ($comic->trim_size)
                    {{$comic->trim_size}}
                    @else
                    N/A
                @endif
            </dd>
            <h5>Numero di Pagine: </h5>
            <dd>
                @if ($comic->page_content)
                    {{$comic->page_content}}
                    @else
                    N/A
                @endif
            </dd>
            <h5>Pubblico indicato: </h5>
            <dd>
                @if ($comic->rating)
                    {{$comic->rating}}
                    @else
                    N/A
                @endif
            </dd>
            <h5>Disponibilità: </h5>
            <dd>
                @if ($comic->available)
                    disponibile
                    @else
                    N/A
                @endif
            </dd>

        </div>
    </div>
@endsection