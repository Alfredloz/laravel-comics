@extends('layouts.app')
@section('title_app')
    ADD NEW COMIC
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<br /> 
@endif
<form action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="title">Titolo Comics</label>
      <input type="text"
        class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="Inserisci il nome del Comics" value="{{ old('title') }}">
      <small id="titleHelper" class="form-text text-muted">Titolo Comics</small>
    </div>
    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>    
    @enderror

    <div class="form-group">
      <label for="description">Descrizione</label>
      <textarea class="form-control" name="description" id="description" rows="5" value="{{ old('description') }}"></textarea>
    </div>
    @error('description')
      <div class="alert alert-danger">{{ $message }}</div>    
    @enderror
        {{-- art --}}
        <div class="form-group">
            <label for="title">Artista</label>
            <input type="text"
              class="form-control" name="art_by" id="title" aria-describedby="titleHelper" placeholder="nome dell'artista" value="{{ old('art_by') }}">
            <small id="titleHelper" class="form-text text-muted">Artista</small>
          </div>
          @error('art_by')
            <div class="alert alert-danger">{{ $message }}</div>    
          @enderror
          {{-- written --}}
          <div class="form-group">
            <label for="written_by">Scrittore</label>
            <input type="text"
              class="form-control" name="written_by" id="title" aria-describedby="titleHelper" placeholder="inserisci scrittore" value="{{ old('written_by') }}">
            <small id="titleHelper" class="form-text text-muted">Scrittore</small>
          </div>
          @error('written_by')
            <div class="alert alert-danger">{{ $message }}</div>    
          @enderror
          {{-- price --}}
      <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" name="price" id="price" value="{{ old('price') }}" placeholder="inserisci il prezzo">
      </div>
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror
      {{-- REALEASE DATE --}}
      <div class="form-group">
        <label for="release_date">Data di rilascio</label>
        <input type="text"
          class="form-control" name="release_date" id="release_date" aria-describedby="titleHelper" placeholder="AAA-MM-DD" value="{{ old('release_date') }}">
        <small id="titleHelper" class="form-text text-muted">Giorno di rilascio</small>
      </div>
      @error('releade_date')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror
      {{-- volume --}}
      <div class="form-group">
        <label for="volume">Volume</label>
        <input type="text"
          class="form-control" name="volume" id="volume" aria-describedby="titleHelper" placeholder="Inserisci numero volume" value="{{ old('volume') }}">
        <small id="titleHelper" class="form-text text-muted">Volume</small>
      </div>
      @error('volume')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror
      {{-- series --}}
      <div class="form-group">
        <label for="series">Series</label>
        <input type="text"
          class="form-control" name="series" id="series" aria-describedby="titleHelper" placeholder="inserisci titolo della serie" value="{{ old('Series') }}">
        <small id="titleHelper" class="form-text text-muted">Serie fumetto</small>
      </div>
      @error('Series')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror
   <div class="form-group">
      <label for="available">Disponibilità</label>
      <select class="form-control" name="available" id="available">
        <option value=1>Si</option>
        <option value=0>No</option>
      </select>
    </div>
    @error('available')
    <div class="alert alert-danger">{{ $message }}</div>    
    @enderror
    {{-- numero di pagine --}}
    <div class="form-group">
        <label for="page_content">Numero di pagine</label>
        <input type="text"
        class="form-control" name="page_content" id="page_content" aria-describedby="titleHelper" placeholder="inserisci numero di pagine" value="{{ old('page_content') }}">
      <small id="titleHelper" class="form-text text-muted">Numero di pagine</small>
      </div>
      @error('page_content')
      <div class="alert alert-danger">{{ $message }}</div>    
      @enderror
      {{-- rating --}}
      <label for="rating" class="col-md-12 col-form-label">Pubblico:</label>
                  <div class="form-check col-md-12">
                      <div class="col-md-3">
                          <input type="radio" class="form-check-input" name="rating" id="" value="Bambini">
                          <label class="form-check-label" for="bambini">Bambini</label>
                      </div>
                      <div class="col-md-3">

                          <input type="radio" class="form-check-input" name="rating" id="" value="Adolescenti">
                          <label class="form-check-label" for="adolescenti">Adolescenti</label>
                      </div>
                      <div class="col-md-3">
                          
                          <input type="radio" class="form-check-input" name="rating" id="" value="adulti">
                          <label class="form-check-label" for="adulti">Adulti</label>
                      </div>
                  </div>
    {{-- cover img --}}
    <div class="form-group">
      <label for="cover">Cover Image</label>
      <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverImgHelper">
      <small id="coverImgHelper" class="form-text text-muted">Add a cover image</small>
  </div>
  @error('cover')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
  {{-- banner img --}}
  <div class="form-group">
    <label for="banner">banner</label>
    <input type="file" class="form-control-file" name="banner" id="cover" placeholder="Aggiungi banner" aria-describedby="coverImgHelper">
    <small id="coverImgHelper" class="form-text text-muted">Aggiungi banner</small>
</div>
  @error('banner')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
  </div>
  

      <button type="submit" class="btn btn-success">Aggiungi il Comics</button>

  </form>
@endsection