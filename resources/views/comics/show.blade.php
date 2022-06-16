@extends('layouts.base')

@section('pageTitle', $comic->title)

@section('mainContent')
    <main>
        <div class="container">
            <div class="show_comic">
                <div class="show_thumb">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}">
                </div>
                <div>
                    <h1>{{$comic->title}}</h1>
                    <p>{{$comic->description}}</p>
                    <p>Serie: {{$comic->series}}</p>
                    <p>Tipo: {{$comic->type}}</p>
                    <h4>Prezzo: {{$comic->price}}</h4>
                </div>
            </div>
        </div>
    </main>
@endsection