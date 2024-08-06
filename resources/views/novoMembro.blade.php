@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container text-center">
                <img src="{!! asset('img/pessoas.png')!!}" alt="">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO MEMBRO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoMembro')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do membro">
            </div>
            <hr>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" 
                       placeholder="Informe o e-mail do membro">
            </div>
            <hr>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" 
                       placeholder="Informe o CPF do membro">
            </div>
            <hr>
            <div class="form-group">
                <label for="tel">Telefone:</label>
                <input type="text" class="form-control" name="telefone" 
                       placeholder="Informe o telefone do membro">
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