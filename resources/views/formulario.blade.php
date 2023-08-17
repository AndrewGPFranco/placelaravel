@extends('layouts.main')
@section('title', 'Place TV - Cadastre um Post')
@section('content')

<section class="formulario">
    <h1>Cadastre um post novo...</h1>
    <form action="/series" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name"><strong>Nome:</strong></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do anime, serie ou filme..." required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="descricao"><strong>Descrição:</strong></label>
            <textarea name="descricao" id="descricao" placeholder="Digite aqui a descrição..." class="form-control"  required autocomplete="off"></textarea>
        </div>
        <div class="form-group">
            <label for="link"><strong>Link:</strong></label>
            <input type="text" name="link" id="link" placeholder="Digite o link..." class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="date"><strong>Data:</strong></label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image"><strong>Imagem:</strong></label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <div class="form-group checkbox">
            <label for="items"><strong>Status:</strong></label>
            <input type="checkbox" name="items[]" value="Finalizado">Finalizado
            <input type="checkbox" name="items[]" value="Em andamento">Em andamento
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
</section>

@endsection
