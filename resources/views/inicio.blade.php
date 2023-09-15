@extends('layouts.main')
@section('title', 'Place TV- Inicio')
@section('content')

<section class="banner">
    <img src="/img/luffyg5.png" alt="Foto do Luffy">
</section>
<div class="container-titulos">
    <h1>Veja meus Animes Favoritos...</h1>
</div>
<section class="container-card">
    @foreach ($series as $serie)
    <div class="card" style="width: 22rem; margin-top: 20px;">
        <img src="/img/series/{{ $serie->image }}" alt="{{ $serie->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $serie->name }}</h5>
          <p class="card-title">Data da Publicação: {{ date('d/m/y', strtotime($serie->date)) }}</p>
          <div class="botoes-acoes">
              <a href="/series/{{$serie->id}}" class="btn btn-primary">Acessar sinopse</a>
              @auth
              <a href="/series/edit/{{ $serie->id }}" class="btn btn-secondary">Editar</a>
              <form action="/series/{{$serie->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
              @endauth
          </div>
        </div>
    </div>
    @endforeach
    <div class="containerPaginate">
        <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-link">Previous Page</a>
        <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-link">Next Page</a>
    </div> 

    @if(count($series) === 0)
        <div class="container-sem-post">
            <h1><span class="sem-post">Nenhum anime foi encontrado...</span></h1>
        </div>
    @endif

    @if(count($series) <= 2)
    <p><a href="/">Mostrar todos...</a></p>
    @endif
</section>
<div class="linha_dois"></div>

@endsection
