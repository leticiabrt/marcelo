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
        <h5 class="card-title" style="text-align: center">Listagem de Livros</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Gênero</th>
                        <th style="text-align:center" colspan="4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item=>$i)
                    <tr>
                        <td>{{ $i['idLivros'] }}</td>
                        <td>{{ $i['Titulo'] }}</td>
                        <td>{{ $i['Autor']}}</td>
                        
                        <td style="text-align:center">
                            <a href="/livro/editar/{{$i['id']}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/livro/apagar/{{$i['id']}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                        
                    </tr>  
                    @endforeach
                    <h1 style="text-align:center">
                        <a href="/livro/novo" class="btn btn-outline-primary">Novo Livro</a>
</h1>
                </tbody>
            </table>
    </div>
</div>
</div>
@endsection