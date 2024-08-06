@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container text-center">
                <img src="{!! asset('img/genero.png')!!}" alt="">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO GÊNERO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoGenero')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do genero">
            </div>
            <hr>
            <div class="form-group">
                <label for="desc">Descrição:</label>
                <input type="text" class="form-control" name="desc" 
                       placeholder="Informe a descrição do genero">
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