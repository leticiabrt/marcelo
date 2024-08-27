@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE O CADASTRO DO LIVRO</h1>
            </div>
        </div>
        <form action="/livro/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Título:</label>
                <input type="text" class="form-control" name="titulo" value="{{$dados->Titulo}}">
            </div>
            <div class="form-group">
                <label for="nome">Autor:</label>
                <input type="text" class="form-control" name="autor" value="{{$dados->Autor}}">
            </div>
            <div class="form-group">
                <label for="generos">Gênero do livro</label>
                <select class="form-control" name="generos" id="generos" required>
                    @foreach ($genero as $item)
                        @if($dados->Genero == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->Genero}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->Genero}}</option>
                        @endif
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="membros">Proprietário do livro</label>
                <select class="form-control" name="membros" id="membros" required>
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