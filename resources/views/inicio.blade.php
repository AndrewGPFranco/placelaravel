@extends('layouts.main')
@section('title', 'Place TV- Inicio')
@section('content')

<section class="banner">
    <img src="/img/foto3.jpg" alt="">
</section>
<div class="linha"></div>
<div class="container-titulos">
    <h1>O que há de melhor para o seu fim de semana?</h1>
</div>
<section class="container-card">
    @foreach ($series as $serie)
    <div class="card" style="width: 22rem; margin-top: 20px;">
        <img src="/img/series/{{ $serie->image }}" alt="{{ $serie->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $serie->name }}</h5>
          <div class="botoes-acoes">
              <a href="/series/{{$serie->id}}" class="btn btn-primary">Acessar sinopse</a>
              <form action="/series/{{$serie->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
          </div>
        </div>
    </div>
    @endforeach
</section>
<div class="linha_dois"></div>

@endsection
