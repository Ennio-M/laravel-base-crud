@extends('layouts.base')

@section('pageTitle', 'Modifica fumetto')

@section('mainContent')
    <main>
        <div class="container">
            <div class="form">
                <h1>Modifica {{$comic->title}}</h1>
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" value="{{$comic->title}}" class="@error('title') is-invalid @enderror">
                        @error('title')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10">{{$comic->description}}</textarea>
                    </div>
                    <div class="field">
                        <label for="image">Immagine</label>
                        <input type="text" id="image" name="image" value="{{$comic->image}}" class="@error('image') is-invalid @enderror">
                        @error('image')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="price">Prezzo</label>
                        <input type="number" id="price" name="price" value="{{$comic->price}}" class="@error('price') is-invalid @enderror">
                        @error('price')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="series">Serie</label>
                        <input type="text" id="series" name="series" value="{{$comic->series}}" class="@error('series') is-invalid @enderror">
                        @error('series')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="sale_date">Data di rilascio</label>
                        <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" class="@error('sale_date') is-invalid @enderror">
                        @error('sale_date')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="type">Seleziona il tipo</label>
                        <select name="type" id="type">
                            <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic book</option>
                            <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>>Graphic novel</option>
                        </select>
                    </div>
                    <button type="submit">Modifica</button>
                </form>
            </div>
        </div>
    </main>
@endsection