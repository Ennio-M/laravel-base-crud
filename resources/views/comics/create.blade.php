@extends('layouts.base')

@section('pageTitle', 'Nuovo fumetto')

@section('mainContent')
    <main>
        <div class="container">
            <div class="form">
                <h1>Aggiungi un nuovo fumetto</h1>
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="field">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" placeholder="Inserisci il titolo del nuovo fumetto" class="@error('title') is-invalid @enderror" value="{{old('title')}}">
                        @error('title')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="field">
                        <label for="image">Immagine</label>
                        <input type="text" id="image" name="image" placeholder="Inserisci l'url della copertina" class="@error('image') is-invalid @enderror" value="{{old('image')}}">
                        @error('image')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="price">Prezzo</label>
                        <input type="number" step="0.01" id="price" name="price" placeholder="Inserisci il prezzo del nuovo fumetto" class="@error('price') is-invalid @enderror" value="{{old('price')}}">
                        @error('price')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="series">Serie</label>
                        <input type="text" id="series" name="series" placeholder="Inserisci la serie del nuovo fumetto" class="@error('series') is-invalid @enderror" value="{{old('series')}}">
                        @error('series')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="sale_date">Data di rilascio</label>
                        <input type="date" id="sale_date" name="sale_date" placeholder="Inserisci la data di rilascio del nuovo fumetto" class="@error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}">
                        @error('sale_date')
                            <p class="red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="type">Seleziona il tipo</label>
                        <select name="type" id="type">
                            <option value="comic book">Comic book</option>
                            <option value="graphic novel">Graphic novel</option>
                        </select>
                    </div>
                    <button type="submit">Aggiungi</button>
                </form>
            </div>
        </div>
    </main>
@endsection