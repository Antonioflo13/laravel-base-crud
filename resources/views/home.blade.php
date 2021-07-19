@extends('layout.main')

@section('main-content')
    {{-- main-container --}}
    <section class="container">
        <h1 class="text-center">Comics Gallery</h1>

        <article>
            @foreach ($comics as $comic)
                <h4>{{ $comic->title }}</h4>
                <a href="{{ route('') }}"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
            @endforeach
        </article>
    </section>
    {{-- main-container --}}

@endsection