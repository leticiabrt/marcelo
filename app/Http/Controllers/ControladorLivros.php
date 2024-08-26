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
        if(isset($dados))
            return view('editaLivro', compact('dados'));
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
            $dados->Ano = $request->input('ano');
            $dados->Autor = $request->input('autor');
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
            $livros = LivroAutor::where('autor_id', '=', $id)->first();
            if(!isset($livros)){
                $dados->delete();
                return redirect('/livro')->with('success', 'Cadastro do livro deletado com sucesso!!');
            }else{
                return redirect('/livro')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/livro')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    public function pesquisaLivro(){
        $dados = array("tabela" => "livro");
        return view('pesquisa', compact('dados'));
    }
    public function procuraLivro(Request $request){
        $titulo = $request->input('texto');
        $dados = DB::table('livros')->select('id', 'Titulo', 'AnoPublicacao')->where(DB::raw('lower(Titulo)'), 'like', '%' . strtolower($titulo) . '%')->get();
        return view('exibeLivros', compact('dados'));
    }
    public function novoAutor($id){
        $dados = DB::table('autors')->orderBy('Nome')->get();
        if(isset($dados)){
            $livro = Livro::find($id);
            $dados->Titulo = $livro->Titulo;
            $dados->livro_id = $id;
            return view('novoAutorLivro', compact('dados'));
        }
        return redirect('/livro')->with('danger', 'Não há autores cadastrados!!');
    }
}