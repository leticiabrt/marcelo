@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE O CADASTRO DO EMPRÉSTIMO</h1>
            </div>
        </div>
        <form action="/emprestimo/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="dataemp">Data Empréstimo:</label>
                <input type="date" class="form-control" name="dataemp" value="{{$dados->DataEmprestimo}}">
            </div>
            <div class="form-group">
                <label for="datadev">Data Devolução:</label>
                <input type="date" class="form-control" name="datadev" value="{{$dados->DataDevolucao}}">
            </div>
            <div class="form-group">
                <label for="livro">Livro:</label>
                <select class="form-control" name="livro" id="livro" required>
                    @foreach ($livro as $item)
                        @if($dados->Titulo == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->Titulo}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->Titulo}}</option>
                        @endif
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="nome">Locatário:</label>
                <select class="form-control" name="nome" id="nome" required>
                    @foreach ($membro as $item)
                        @if($dados->Prop == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->Nome}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->Nome}}</option>
                        @endif
                    @endforeach
                </select>
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