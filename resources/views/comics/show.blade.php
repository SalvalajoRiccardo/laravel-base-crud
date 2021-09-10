@extends('layouts.app')

@section('title', 'ComicDetail')

@section('content')
    <div class="container">
       
       <div class="row">
           <div class="col text-center">
               <h1>{{ $comic->title }} </h1>
           </div>
       </div>

       <div class="row">
           <div class="col-md-6">
               <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
           </div>
           <div class="col-md-6">
               <!-- !! per leggere html tag -->
               <p>{!! $comic->description !!}</p>
           </div>
       </div>

       <div class="row">
           <div class="col text-center">
               <div class="badge bg-primary">price: {{ $comic->price }} $ </div>
               <div class="badge bg-success">sale date: {{ $comic->sale_date }} </div>
           </div>
       </div>
   </div>
@endsection