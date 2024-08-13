@extends('layout')
@section('content')
<div class="fundo">
    <div class="jumbotron nosso">
        <h1 class="display-4">Seja bem-vindo(a) ao nosso sistema de empréstimo de livros entre amigos.</h1>
        <p class="lead">Aqui você pode visualizar os livros disponíveis e os membros do sistema.</p>
        <hr class="my-4">
    </div>
    <div class="icones">
        <div class="row">
            <div class="col-sm-3 text-center">
                <button type="button" class="btn">
                <a href="{{route('exibeLivros')}}"><img src="{!! asset('img/livros.png')!!}"></a>
                </button>
            </div>
            <div class="col-sm-3 text-center">
                <button type="button" class="btn">
                <a href="{{route('novoMembro')}}"><img src="{!! asset('img/pessoas.png')!!}"></a>
                </button>
            </div>
            <div class="col-sm-3 text-center">
                <button type="button" class="btn">
                    <a href="{{route('novoGenero')}}"><img src="{!! asset('img/genero.png')!!}"></a>
                </button>
            </div>
            <div class="col-sm-3 text-center">
                <button type="button" class="btn">
                <a href="{{route('novoEmprestimo')}}"><img src="{!! asset('img/emprestimo.png')!!}"></a>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection