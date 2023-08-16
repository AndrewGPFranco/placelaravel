@extends('layouts.main')
@section('title', 'Place TV - ' . $serie->name . ': Sinopse')
@section('content')

<section class="show-sinopse">

    <img src="/img/series/{{ $serie->image }}" alt="{{ $serie->name }}">
    <div class="infos-sinopse">
        <h4><strong>Nome:</strong></h4>
        <p>{{ $serie->name }}</p>
        <h4><strong>Descrição:</strong></h4>
        <p>{{ $serie->descricao }}</p>
        <h4>Status:</h4>
        @if ($serie->items !== null)
            <ul>
                @foreach ($serie->items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <li>Sem informações...</li>
        @endif
        <p>
            <a href="{{ $serie->link }}" target="blank">Assista agora pela Crunchyroll</a>
        </p>
    </div>

</section>

@endsection
