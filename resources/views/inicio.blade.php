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
    <div class="card" style="width: 22rem; margin: 10px;">
        <img src="/img/series/{{ $serie->image }}" alt="{{ $serie->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $serie->name }}</h5>
          <p class="card-text">{{ $serie->descricao }}</p>
          <p><strong>Postado:</strong> {{ $serie->created_at }}</p>
          <a href="{{ $serie->link }}" target="blank" class="btn btn-primary">Acessar sinopse</a>
        </div>
    </div>
    @endforeach
</section>
<div class="linha_dois"></div>

@endsection
