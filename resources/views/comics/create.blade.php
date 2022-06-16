@extends('layouts.base')

@section('pageTitle', 'Nuovo fumetto')

@section('mainContent')
    <main>
        <div class="container">
            <h1>Aggiungi un nuovo fumetto</h1>
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div>
                    <label for="title">Titolo</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo del nuovo fumetto">
                </div>
                <div>
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="image">Immagine</label>
                    <input type="text" id="image" name="image" placeholder="Inserisci l'url della copertina">
                </div>
                <div>
                    <label for="price">Prezzo</label>
                    <input type="number" id="price" name="price" placeholder="Inserisci il prezzo del nuovo fumetto">
                </div>
                <div>
                    <label for="series">Serie</label>
                    <input type="text" id="series" name="series" placeholder="Inserisci la serie del nuovo fumetto">
                </div>
                <div>
                    <label for="sale_date">Data di rilascio</label>
                    <input type="date" id="sale_date" name="sale_date" placeholder="Inserisci la data di rilascio del nuovo fumetto">
                </div>
                <div>
                    <label for="type">Seleziona il tipo</label>
                    <select name="type" id="type">
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                    </select>
                </div>
                <button type="submit">Aggiungi</button>
            </form>
        </div>
    </main>
@endsection