@extends('layouts.app')

@section('title', 'creazione pasta')

@section('content')
    <div class="container mt-2">
        <h2>Inserimento prodotto</h2>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="tit" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="tit">
            </div>
            <div class="mb-3">
              <label for="img" class="form-label">Image</label>
              <input type="text" name="thumb" class="form-control" id="img">
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select name="type" id="tipo" class="form-control">
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" name="price" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" name="series" class="form-control" id="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea name="description" id="desc" cols="30" rows="10" class="form-control"></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
@endsection