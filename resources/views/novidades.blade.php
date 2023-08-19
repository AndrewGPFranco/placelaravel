@extends('layouts.main')
@section('title', 'Place TV - Aulas')
@section('content')

<section class="container-iframes">
    @foreach ($videos as $video)
    <div class="container-iframes-pai">
        <div class="container-iframes-filho">
            <h2>Assunto do vídeo:</h2>
            <p><strong>{{ $video->nome }}</strong></p>
            <iframe width="400" height="400" src="{{$video->link}}" title="{{$video->nome}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="container-link">
                <h3>Link do vídeo:</h3>
                <p>
                    <a class="link-video" href="{{ $video->link }}" target="_blank">Link do vídeo no YT</a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</section>

@endsection
