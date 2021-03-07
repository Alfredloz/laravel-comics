@extends('layouts.app')
@section('title_app')
    Show Comic ADMIN
@endsection
@section('content')
<button class="btn btn-block btn-success"><a class="text-white" href="{{ route('admin.comics.index') }}">Torna alla pagina principale</a></button>
    <div class="card show_comic">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h1>Titolo:</h1>
            <h2 class="card-title">{{$comic->title}}</h2>
            <div class="images_box d_flex">
                <div class="banners_box">
                    <h3>Banner</h3>
                    <img src="{{asset('storage/' . $comic->banner )}}" alt="" id="banner_img">
                </div>
                <div class="covers_box">
                    <h3>Cover</h3>
                    <img src="{{asset('storage/' . $comic->cover )}}" alt="" id="comic_img">
                </div>
            </div>
            <h2>Descrizione: </h2>
            <p class="card-text">{{$comic->description}}</p>
            <table class="table spec_table">
                <thead>
                    <tr>
                        <th class="title_table">Specifiche:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Serie:</td>
                        <td class="text-primary">{{ $comic->series }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Prezzo:</td>
                        <td>{{ $comic->price }} €</td>
                    </tr>
                    <tr>
                        <td scope="row">Giorno di uscita:</td>
                        <td>{{ $comic->release_date }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Volume:</td>
                        <td>{{ $comic->volume }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Formato:</td>
                        <td> @if ($comic->trim_size)
                            {{$comic->trim_size}}
                            @else
                            N/A
                        @endif</td>
                    </tr>
                    <tr>
                        <td scope="row">Pagine:</td>
                        <td> @if ($comic->page_content)
                            {{$comic->page_content}}
                            @else
                            N/A
                        @endif</td>
                    </tr>
                    <tr>
                        <td scope="row">Pubblico a cui è rivoloto:</td>
                        <td>@if ($comic->rating)
                            {{$comic->rating}}
                            @else
                            N/A
                        @endif</td>
                    </tr>
                    <tr>
                        <td scope="row">Disponibilità:</td>
                        <td>@if ($comic->available)
                            disponibile
                            @else
                            N/A
                        @endif</td>
                    </tr>
                </tbody>
            </table>
            <table class="table artist_table">
                <thead>
                    <tr>
                        <th class="title_table">Talent:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Art by:</td>
                        <td scope="row" class="text-primary">{{ $comic->art_by }}</td>
                    </tr>
                    <tr>
                        <td>Written by:</td>
                        <td scope="row" class="text-primary">{{ $comic->written_by }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection