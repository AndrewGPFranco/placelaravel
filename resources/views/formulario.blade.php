@extends('layouts.main')
@section('title', 'Place TV - Cadastre um Post')
@section('content')

<section class="formulario">
    <h1>Cadastre um post novo...</h1>
    <form action="/series" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do anime, serie ou filme..." required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" placeholder="Digite aqui a descrição..." class="form-control"  required autocomplete="off"></textarea>
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" name="link" id="link" placeholder="Digite o link..." class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
</section>

@endsection
