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
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Cadastro de Empréstimos</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Locatário</th>
                        <th>Livro</th>
                        <th>Data empréstimo</th>
                        <th>Data devolução</th>
                            <th style="text-align:center" colspan="2">Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Locatario }}</td>
                        <td>{{ $item->Livros }}</td>
                        <td>{{ $item->DataEmprestimo }}</td>
                        <td>{{ $item->DataDevolucao }}</td>
                       
                            <td style="text-align:center">
                                <a href="/emprestimo/editar/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td style="text-align:center">
                                <a href="/emprestimo/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                                onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                            </td>
                        
                    </tr>  
                    @endforeach
                    <h1 style="text-align:center">
                        <a href="/emprestimo/novo" class="btn btn-outline-primary">Novo Empréstimo</a>
</h1>
                </tbody>
            </table>
    </div>
</div>
</div>
@endsection