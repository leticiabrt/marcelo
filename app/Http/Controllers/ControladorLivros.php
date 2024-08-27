<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Genero;
use App\Models\Membro;

use Illuminate\Support\Facades\DB;

class ControladorLivros extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Livro::all();
       
        foreach($dados as $item){
            $membro = Membro::find($item -> Prop);
            $item -> Proprietario=$membro-> Nome;
            $Genero = Genero::find($item-> Genero);
            $item -> Generos=$Genero->Genero;
        }

       return view('exibeLivro', compact('dados'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genero = Genero::all();
        $membro = Membro::all();
        return view('novoLivro', compact('genero', 'membro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Livro();
        $dados->Titulo = $request->input('titulo');
        $dados->Autor = $request->input('autor');
        $dados->Prop = $request->input('membros');
        $dados->Genero = $request->input('generos');
        if($dados->save())
            return redirect('/livro')->with('success', 'Livro cadastrado com sucesso!!');
        return redirect('/livro')->with('danger', 'Erro ao cadastrar livro!');
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
        $dados = Livro::find($id);
        $genero = Genero::all();
        $membro = Membro::all();
        if(isset($dados))
            return view('editaLivro', compact('dados', 'genero', 'membro'));
        return redirect('/livro')->with('danger', 'Cadastro do livro não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Livro::find($id);
        
        if(isset($dados)){
            $dados->Titulo = $request->input('titulo');
            $dados->Autor = $request->input('autor');
            $dados->Prop = $request->input('membros');
            $dados->Genero = $request->input('generos');
            $dados->save();
            return redirect('/livro')->with('success', 'Livro cadastrado com sucesso!!');
        }else{
            return redirect('/livro')->with('danger', 'Cadastro do livro não localizado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Livro::find($id);
            if(isset($dados)){
                $dados->delete();
                return redirect('/livro')->with('success', 'Cadastro do livro deletado com sucesso!!');
            }else{
                return redirect('/livro')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        
    }
}