@extends('layouts.main')
@section('title', 'Place TV - Aulas')
@section('content')

<section class="container-iframes">
    @foreach ($videos as $video)
    <div class="container-iframes-pai">
        <div class="container-iframes-filho">
            <h2>Assunto do vídeo:</h2>
            <p><strong>{{ $video->nome }}</strong></p>
            <iframe width="400" height="315" src="{{$video->link}}" title="{{$video->nome}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    @endforeach
</section>

@endsection
