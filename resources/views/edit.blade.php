@extends('layouts.main')
@section('title', 'Place TV - Editando um Post')
@section('content')

@auth
<section class="formulario">
    <h1>Editar post...</h1>
    <form action="/series/update/{{$serie->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name"><strong>Nome:</strong></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do anime, serie ou filme..." value="{{ $serie->name }}" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="descricao"><strong>Descrição:</strong></label>
            <textarea name="descricao" id="descricao" placeholder="Digite aqui a descrição..." class="form-control"  required autocomplete="off">{{ $serie->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="link"><strong>Link:</strong></label>
            <input type="text" name="link" id="link" placeholder="Digite o link..." class="form-control" required autocomplete="off" value="{{ $serie->link }}">
        </div>
        <div class="form-group">
            <label for="date"><strong>Data:</strong></label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group img-edit">
            <label for="image"><strong>Imagem:</strong></label>
            <input type="file" name="image" id="image" class="form-control">
            <div class="img-class-edit"><img src="/img/series/{{$serie->image}}" alt=""></div>
        </div>
        <div class="form-group checkbox">
            <label for="items"><strong>Status:</strong></label>
            <input type="checkbox" name="items[]" value="Finalizado">Finalizado
            <input type="checkbox" name="items[]" value="Em andamento">Em andamento
        </div>
        <input type="submit" value="Editar" class="btn btn-primary">
    </form>
</section>
@endauth

@endsection
