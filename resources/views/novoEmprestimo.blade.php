@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container text-center">
                <img src="{!! asset('img/emprestimo.png')!!}" alt="">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO EMPRÉSTIMO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoEmprestimo')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome1">Locador:</label>
                <input type="text" class="form-control" name="nome1" 
                       placeholder="Informe o nome do dono do livro que será emprestado">
            </div>
            <hr>
            <div class="form-group">
                <label for="nome2">Locatário</label>
                <input type="text" class="form-control" name="nome2" 
                       placeholder="Informe o nome do membro que alugará o livro">
            </div>
            <hr>
            <div class="form-group">
                <label for="livro">Livro(s):</label>
                <input type="text" class="form-control" name="livro" 
                       placeholder="Informe o nome dos livros">
            </div>
            <hr>
            <div class="form-group">
                <label for="data1">Data empréstimo:</label>
                <input type="date" class="form-control" name="data1" 
                       placeholder="Informe a data que o livro será emprestado">
            </div>
            <hr>
            <div class="form-group">
                <label for="data2">Data devolução:</label>
                <input type="date" class="form-control" name="data2" 
                       placeholder="Informe a data que o livro deve ser devolvido">
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