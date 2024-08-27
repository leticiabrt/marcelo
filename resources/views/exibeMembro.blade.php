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
        <h5 class="card-title" style="text-align: center">Cadastro de Membros</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        
                        <th style="text-align:center" colspan="2">Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Nome }}</td>
                        <td>{{ $item->CPF }}</td>
                        <td>{{ $item->Telefone }}</td>
                       
                            <td style="text-align:center">
                                <a href="/membro/editar/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td style="text-align:center">
                                <a href="/membro/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                                onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                            </td>
                        
                    </tr>  
                    @endforeach
                    <h1 style="text-align:center">
                        <a href="/membro/novo" class="btn btn-outline-primary">Novo Membro</a>
</h1>
                </tbody>
            </table>
    </div>
</div>
</div>
@endsection