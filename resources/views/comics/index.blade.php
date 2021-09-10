@extends('layouts.app')
@section('title', 'I Nostri Comic Books')

@section('content')
    <div class="container">
      <p>
        @if (session('modifica'))
        <div class="alert alert-success">
          {{ session('modifica') }}
        </div>
        @endif
        @if (session('deleted'))
        <div class="alert alert-success">
          {{ session('deleted') }}
        </div>
        @endif
      </p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Codice Prodotto</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
            @foreach($comics as $comic)                  
              <tr>
                <th scope="row">{{ $comic->id }} </th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }} " class="btn btn-primary">Show</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                      <form action="{{ route ('comics.destroy',  $comic->id) }} " method="post"  class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                      </form>
                </td>
              </tr>
            @endforeach          
            </tbody>
          </table>

          <div>
              {{$comics->links()}}
          </div>
    </div>
@endsection