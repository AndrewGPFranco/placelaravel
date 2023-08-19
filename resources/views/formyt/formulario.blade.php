@extends('layouts.main')
@section('title', 'Place TV - Cadastre um Vídeo')
@section('content')

@guest

<div class="mensagem-erro">
    <h1>Somente admins podem adicionar vídeos novos...</h1>
</div>

@endguest

@auth
<section class="formulario form-video">
    <h1>Cadastre um vídeo novo...</h1>
    <form action="/videos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome"><strong>Nome do vídeo:</strong></label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome..." required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="link"><strong>Link do vídeo:</strong></label>
            <input type="text" name="link" id="link" placeholder="Digite o link..." class="form-control" required autocomplete="off">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
</section>
@endauth

@endsection
