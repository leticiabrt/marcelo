@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div><br />
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="card-body py-4">
        <h5 class="card-title" style="text-align: center">Cadastro de Livros</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Título</th>
                        <th>Ano de publicação</th>
                        <th style="text-align:center" colspan="4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Titulo }}</td>
                        <td>{{ $item->AnoPublicacao }}</td>
                        <td style="text-align:center">
                            <a href="/novoAutorLivro/{{$item->id}}" class="btn btn-success">Cadastra Autor</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/livroAutor/detalhes/{{$item->id}}" class="btn btn-secondary">Detalhes</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/livro/editar/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/livro/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
</div>
@endsection