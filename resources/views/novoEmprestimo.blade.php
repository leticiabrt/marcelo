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
                <label for="nome">Locatário</label>
                <select name="nome">
                    @foreach($membro as $item)
                        <option value="{{$item->id}}">{{$item->Nome}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label for="livro">Livro:</label>
                <select name="livro">
                    @foreach($livro as $item)
                        <option value="{{$item->id}}">{{$item->Titulo}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label for="dataemp">Data empréstimo:</label>
                <input type="date" class="form-control" name="dataemp" 
                       placeholder="Informe a data que o livro será emprestado">
            </div>
            <hr>
            <div class="form-group">
                <label for="datadev">Data devolução:</label>
                <input type="date" class="form-control" name="datadev" 
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