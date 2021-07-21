@extends('layout.main')

@section('main-content')
    {{-- main-container --}}
    <section class="container my-5">
        <h1 class="text-center">Comics Gallery</h1>

        <article class="d-flex flex-wrap mt-5 mb-5">
            @foreach ($comics as $comic)
            <div class="card m-2" style="width: 14rem;">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ $comic->title }}</h4>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-4">Vedi dettagli fumetto</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary mb-4">Modifica fumetto</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Cancella fumetto">
                    </form>
                </div>
              </div>
            @endforeach
        </article>
        {{ $comics->links() }}
    </section>
    {{-- main-container --}}

@endsection