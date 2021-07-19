@extends('layout.main')

@section('main-content')
    <section class="container my-5">
        <h1>{{ $comic->title }}</h1>
        <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
        <h4>Prezzo</h4>
        <h4>{{ $comic->price }} &euro;</h4>
        <p>{{ $comic->description }}</p>
    </section>
@endsection