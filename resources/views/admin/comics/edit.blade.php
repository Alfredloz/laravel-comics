@extends('layouts.app') 
@section('content')
  <form action="{{ route('admin.comics.update', $comic) }}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PATCH')
    
      <div class="container">
              <div class="form-group row">
                  <label for="title" class="col-sm-1-12 col-form-label">Titolo:</label>
                  <div class="col-sm-1-12 col-md-12">
                      <input type="text" class="form-control" name="title" id="inputName" placeholder="" value="{{$comic->title}}">
                      @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <label for="description" class="col-sm-1-12 col-form-label">Descrizone:</label>
                  <div class="col-sm-1-12 col-lg-12">
                      <textarea name="description" id="description_comic" cols="100" rows="10" >{{ $comic->description }}</textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                  <label for="price" class="col-sm-1-12 col-form-label">Prezzo:</label>
                  <div class="col-sm-1-12 col-md-4">
                    <input type="text" class="form-control" name="price" id="inputPrice" placeholder="" value="{{$comic->price}}">
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <label for="trim_size" class="col-sm-1-12 col-form-label">Formato:</label>
                  <div class="col-sm-1-12 col-md-12">
                      <input type="text" class="form-control" name="trim_size" id="inputTrim" placeholder="" value="{{$comic->trim_size}}">
                      @error('trim_size')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <label for="page_content" class="col-sm-1-12 col-form-label">Numero di Pagine:</label>
                  <div class="col-sm-1-12 col-md-12">
                      <input type="text" class="form-control" name="trim_size" id="inputTrim" placeholder="" value="{{$comic->page_content}}">
                      @error('page_content')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
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
                  {{-- form for rating --}}
                  <label for="available" class="col-md-12 col-form-label">Disponibilità:</label>
                        
                    <div class="form-check col-md-12">
                            <div class="col-md-3">
                                <input type="radio" class="form-check-input" name="available" id="" value="1">
                                <label class="form-check-label" for="si">Si</label>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" class="form-check-input" name="available" id="" value="0">
                                <label class="form-check-label" for="no">No</label>
                            </div>          
                    </div>
                      
                    <div class="form-group">
                      <label for="cover">Carica Immagine</label>
                      <input type="file" class="form-control-file" name="cover" id="" placeholder="carica la tua immagine" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted">Carica la tua immagine</small>
                    </div>
                </div>
              </div>

              <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="aggiorna">
                  </div>
                </div>
              </div>
  </form>
@endsection