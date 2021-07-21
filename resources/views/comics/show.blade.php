@extends('layout.main')

@section('main-content')
    <section class="container my-5">
        <h1 class="mb-4">{{ $comic->title }}</h1>
        <img class="mb-4"" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h4>Prezzo</h4>
        <h4 class="mb-4">{{ $comic->price }} &euro;</h4>
        <h4>Data di pubblicazione</h4>
        <h5 class="mb-4">{{ $comic->sale_date }}</h5>
        <h4 class="mb-3">Descrizione</h4>
        <p>{{ $comic->description }}</p>
    </section>
@endsection