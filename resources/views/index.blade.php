@extends('layout')
@section('content')
<div class="fundo">
    <div class="card mb-4 shadow-sm quadrado">
        <h1 class="display-4">Seja bem-vindo(a) ao nosso sistema de empréstimo de livros entre amigos.</h1>
        <p class="lead">Aqui você pode visualizar os livros disponíveis e os membros do sistema.</p>
    </div>
    <div class="icones">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="card mb-4 shadow-sm">
                <button type="button" class="btn">
                <a href="{{route('exibeLivros')}}"><img src="{!! asset('img/livros.png')!!}"></a>
                </button>
                <h4 class="display-7">Visualize os livros disponíveis.</h4>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card mb-4 shadow-sm">
                <button type="button" class="btn">
                <a href="{{route('exibeMembros')}}"><img src="{!! asset('img/pessoas.png')!!}"></a>
                </button>
                <h4 class="display-7">Visualize os membros da nossa biblioteca.</h4>
                </div>
            </div>
            <div class="col-md-3 text-center">
            <div class="card mb-4 shadow-sm">
                <button type="button" class="btn">
                    <a href="{{route('exibeGeneros')}}"><img src="{!! asset('img/genero.png')!!}"></a>
                </button>
                <h4 class="display-7">Visualize os gêneros dos livros cadastrados.</h4>
                </div>
            </div>
            <div class="col-md-3 text-center">
            <div class="card mb-4 shadow-sm">
                <button type="button" class="btn">
                <a href="{{route('exibeEmprestimos')}}"><img src="{!! asset('img/emprestimo.png')!!}"></a>
                </button>
                <h4 class="display-7">Visualize os empréstimos realizados.</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection