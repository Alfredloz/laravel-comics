@extends('layouts.guests_app')
@section('header')
    <h1>Single Comic</h1>
@endsection
@section('main')
<img src="{{ asset('storage/' . $comic->cover) }}" alt="">

<div class="card_info">
    <h2>{{ $comic->title  }}</h2>
    <div class="price">
        <span> Prezzo: {{ $comic->price }}</span>
        <span> dispobilità:
          @if ($comic->available)
              disponibile
          @else
             non disponibile 
          @endif  
        </span>
    </div>
    <p>
        {{ $comic->description }}
    </p>
</div>
@endsection