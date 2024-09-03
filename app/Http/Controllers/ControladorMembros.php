<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;
use App\Models\Livro;
use App\Models\Emprestimo;
use Illuminate\Support\Facades\DB;

class ControladorMembros extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Membro::all();
        return view('exibeMembro', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoMembro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Membro();
        $dados->Nome = $request->input('nome');
        $dados->CPF = $request->input('cpf');
        $dados->Telefone = $request->input('telefone');
        if($dados->save())
            return redirect('/membro')->with('success', 'Membro cadastrado com sucesso!!');
        return redirect('/membro')->with('danger', 'Erro ao cadastrar membro!');
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
        $dados = Membro::find($id);
        if(isset($dados))
            return view('editaMembro', compact('dados'));
        return redirect('/membro')->with('danger', 'Cadastro do membro não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Membro::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->CPF = $request->input('cpf');
            $dados->Telefone = $request->input('telefone');
            $dados->save();
            return redirect('/membro')->with('success', 'Membro cadastrado com sucesso!!');
        }else{
            return redirect('/membro')->with('danger', 'Cadastro do membro não localizado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Membro::find($id);
            if(isset($dados)){
                $livros = Livro::where('Prop', '=', $id)->first();
                if(!isset($livros)){
                    $dados->delete();
                    return redirect('/membro')->with('success', 'Cadastro do membro deletado com sucesso!!');
                }else{
                    return redirect('/membro')->with('danger', 'Cadastro não pode ser excluído!!');
                } 
                $emprestimos = Emprestimo::where('locatario_id', '=', $id)->first();
                if(!isset($emprestimos)){
                    $dados->delete();
                    return redirect('/membro')->with('success', 'Cadastro do membro deletado com sucesso!!');
                }else{
                    return redirect('/membro')->with('danger', 'Cadastro não pode ser excluído!!');
                } 
            }else{
                return redirect('/genero')->with('danger', 'Cadastro não localizado!!');
            }  
    }

}
