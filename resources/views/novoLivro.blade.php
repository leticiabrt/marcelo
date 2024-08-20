@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid text-center">
                <img src="{!! asset('img/livros.png')!!}" alt="">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO LIVRO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoLivro')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" class="form-control" name="titulo" 
                       placeholder="Informe o título do livro">
            </div>
            <hr>
            <div class="form-group">
                <label for="membros">Proprietário do livro:</label>
                <input type="text" class="form-control" name="membros" 
                       placeholder="Informe o proprietário do livro">
            </div>
            <hr>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" name="autor" 
                       placeholder="Informe o autor do livro">
            </div>
            <hr>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input type="text" class="form-control" name="genero" 
                       placeholder="Informe o gênero">
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection