@extends('layout.main')

@section('main-content')
    {{-- main-container --}}
    <section class="container my-5">
        <h1 class="text-center">Comics Gallery</h1>

        <article class="d-flex flex-wrap justify-content-center">
            @foreach ($comics as $comic)
            <div class="card" style="width: 14rem;">
                <a href="{{ route('comics.show', $comic->id) }}"><img class="card-img-top"  src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
                <div class="card-body">
                    <h4 class="card-title">{{ $comic->title }}</h4>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vedi dettagli fumetto</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica fumetto</a>
                </div>
              </div>
            @endforeach
        </article>
        {{ $comics->links() }}
    </section>
    {{-- main-container --}}

@endsection