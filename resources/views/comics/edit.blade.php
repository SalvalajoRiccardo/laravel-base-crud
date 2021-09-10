@extends('layouts.app')

@section('title', 'modifica Comic')

@section('content')
    <div class="container mt-2">
        <h2>Modifca prodotto {{ $comic->id }}</h2>
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="tit" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="tit" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
              <label for="img" class="form-label">Image</label>
              <input type="text" name="thumb" class="form-control" id="img" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select name="type" id="tipo" class="form-control">
                    <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>comic book</option>
                    <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" name="price" class="form-control" id="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea name="description" id="desc" cols="30" rows="10" class="form-control">{{ $comic->description }}</textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
@endsection