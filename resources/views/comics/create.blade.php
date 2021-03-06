@extends('layout.main')

@section('main-content')
    <section class="container my-5">
        <h4 class="mb-5">Inserisci un nuovo fumetto</h4>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Inserisci il titolo" name="title">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di pubblicazione</label>
                <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data di pubblicazione" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="type" placeholder="Inserisci la tipologia" name="type">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci url immagine" name="thumb">
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Descrizione</label>
                <textarea  id="description" cols="30" rows="10" placeholder="Inserisci la descrizione del fumetto" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Salva</button>
          </form>
    </section>
@endsection