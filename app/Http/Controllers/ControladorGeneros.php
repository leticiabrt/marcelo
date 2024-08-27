<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use Illuminate\Support\Facades\DB;

class ControladorGeneros extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Genero::all();
        return view('exibeGenero', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoGenero');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Genero();
        $dados->Genero = $request->input('Genero');
        $dados->Descricao = $request->input('Descricao');
        if($dados->save())
            return redirect('/genero')->with('success', 'Gênero cadastrado com sucesso!!');
        return redirect('/genero')->with('danger', 'Erro ao cadastrar gênero!');
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
        $dados = Genero::find($id);
        if(isset($dados))
            return view('editaGenero', compact('dados'));
        return redirect('/genero')->with('danger', 'Cadastro do gênero não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Genero::find($id);
        if(isset($dados)){
            $dados->Genero = $request->input('genero');
            $dados->Descricao = $request->input('descricao');
            $dados->save();
            return redirect('/genero')->with('success', 'Gênero cadastrado com sucesso!!');
        }else{
            return redirect('/genero')->with('danger', 'Cadastro do gênero não localizado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Genero::find($id);
            if(isset($dados)){
                $dados->delete();
                return redirect('/genero')->with('success', 'Cadastro do gênero deletado com sucesso!!');
            }else{
                return redirect('/genero')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        
    }
    
}