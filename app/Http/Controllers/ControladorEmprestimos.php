<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Membro;
use Illuminate\Support\Facades\DB;

class ControladorEmprestimos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Emprestimo::all();
        foreach($dados as $item){
            $membro = Membro::find($item -> locatario_id);
            $item -> Locatario=$membro-> Nome;
            $Livro = Livro::find($item-> livros_id);
            $item -> Livros=$Livro->Titulo;
        }
        return view('exibeEmprestimo', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livro = Livro::all();
        $membro = Membro::all();
        return view('novoEmprestimo',  compact('livro', 'membro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Emprestimo();
        $dados->DataEmprestimo = $request->input('dataemp');
        $dados->DataDevolucao = $request->input('datadev');
        $dados->livros_id = $request->input('livro');
        $dados->locatario_id = $request->input('nome');
        if($dados->save())
            return redirect('/emprestimo')->with('success', 'Empréstimo cadastrado com sucesso!!');
        return redirect('/emprestimo')->with('danger', 'Erro ao cadastrar empréstimo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Emprestimo::find($id);
        $livro = Livro::all();
        $membro = Membro::all();
        if(isset($dados))
            return view('editaEmprestimo', compact('dados', 'livro', 'membro'));
        return redirect('/emprestimo')->with('danger', 'Cadastro do empréstimo não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Emprestimo::find($id);
        if(isset($dados)){
            $dados->DataEmprestimo = $request->input('dataemp');
            $dados->DataDevolucao = $request->input('datadev');
            $dados->livros_id = $request->input('livro');
            $dados->locatario_id = $request->input('nome');
            $dados->save();
            return redirect('/emprestimo')->with('success', 'Empréstimo cadastrado com sucesso!!');
        }else{
            return redirect('/emprestimo')->with('danger', 'Cadastro do empréstimo não localizado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Emprestimo::find($id);
            if(isset($dados)){
                $dados->delete();
                return redirect('/emprestimo')->with('success', 'Cadastro do empréstimo deletado com sucesso!!');
            }else{
                return redirect('/emprestimo')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        
    }
}