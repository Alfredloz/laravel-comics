@extends('layouts.guests_app')
@section('header')
    <h1>Single Comic</h1>
@endsection
@section('main')
<div class="banner_box">
    <img src="{{ asset('storage/' . $comic->banner) }}" alt="">
</div>
<div class="cover_box">
    <div class="card_img">
        <img src="{{ asset('storage/' . $comic->cover) }}" alt="">
    </div>
</div>

<div class="infoComic">
    <h2>{{ $comic->title  }}</h2>
    <div class="bg-success infoContent d_flex text-white">
        <div class="priceAvailable d_flex">
            <div class="price">
                <span> Prezzo:  {{ $comic->price }} €</span>
            </div>
            <div class="available">
            <span> dispobilità:</span>
            </div>
        </div>
        <div class="check_box d_flex">
            <div class="dropdown open">
                <button class=" btn bg-success dropdown-toggle text-white" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                            Verifica
                        </button>
                <div class="dropdown-menu " aria-labelledby="triggerId">
                    <button class="dropdown-item {{ $comic->available ?  '': 'disabled' }}" href="#">@if ($comic->available)
                        disponibile
                    @else
                       non disponibile 
                    @endif  </button>
                    <button class="dropdown-item " href="#">Prenota</button>
                    <button class="dropdown-item " href="#">@if ($comic->available)
                        Acquista
                    @endif</button>
                </div>
            </div>
        </div>
    </div>
    <p>
        {{ $comic->description }}
    </p>
</div>

<section class="spec_section d_flex">
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
                <td>{{ $comic->price }}</td>
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
                <td scope="row">Format:</td>
                <td>{{ $comic->price }}</td>
            </tr>
            <tr>
                <td scope="row">Pagine:</td>
                <td>{{ $comic->price }}</td>
            </tr>
            <tr>
                <td scope="row">Pubblico a cui è rivoloto:</td>
                <td>{{ $comic->rating }}</td>
            </tr>
            <tr>
                <td scope="row">Prezzo:</td>
                <td>{{ $comic->price }}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection