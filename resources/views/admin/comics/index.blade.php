@extends('layouts.app')
@section('title_app')
    ALL COMICS ADMIN
@endsection
@section('content')
    <button class="btn-primary btn btn-block"><a class="text-white" href="{{ route('admin.comics.create')}}">AGGIUNGI NUOVO COMIC <i class="far fa-plus-square"></i> </a></button>
    <h1 class="text-center">Elenco fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id Comic</th>
                <th>Comic title</th>
                <th>Artist</th>
                <th>Writer</th>
                <th>Price</th>
                <th>Data di rilascio</th>
                <th>Disponibilità</th>
                <th>Azioni</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
               <td>{{$comic->id}}</td>
               <td>{{$comic->title}}</td>
               <td>{{$comic->art_by}}</td>
               <td>{{$comic->written_by}}</td>
               <td>{{$comic->price}}</td>
               <td>{{$comic->release_date}}</td>
               <td>
                   @if ($comic->available == 1) 
                       disponibile
                    @else 
                       non disponibile
                   @endif
                   </td>
                   <td>
                    <div class="dropdown open">
                        <button class="btn btn-secondary btn-sm dropdown-toggle btn-info" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                    opzioni
                                </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="{{ route('admin.comics.show', $comic) }}">Visualizza</a>
                            <a class="dropdown-item" href="{{route('admin.comics.edit', $comic)}}">Modifica</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('admin.comics.destroy', $comic) }} " method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella" class="btn btn-danger btn-block">    
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
@endsection