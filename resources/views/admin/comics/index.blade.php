@extends('layouts.app')

@section('content')
    <h1 class="text-center">Elenco fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id Comic</th>
                <th>Comic title</th>
                <th>Description</th>
                <th>Artist</th>
                <th>Writer</th>
                <th>Price</th>
                <th>Data di rilascio</th>
                <th>Copertina</th>
                <th>Disponibilità</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
               <td>{{$comic->id}}</td>
               <td>{{$comic->title}}</td>
               <td>{{$comic->description}}</td>
               <td>{{$comic->art_by}}</td>
               <td>{{$comic->written_by}}</td>
               <td>{{$comic->price}}</td>
               <td>{{$comic->release_date}}</td>
               <td>{{$comic->cover}}</td>
               <td>
                   @if ($comic->available == 1) 
                       disponibile
                    @else 
                       non disponibile
                   @endif
                   </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection