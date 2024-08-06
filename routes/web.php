<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::post('/livro', [App\Http\Controllers\ControladorLivros::class, 'store'])->name('gravaNovoLivro');
Route::get('/livro/novo', [App\Http\Controllers\ControladorLivros::class, 'create'])->name('novoLivro');
Route::get('/livro/apagar/{id}', [App\Http\Controllers\ControladorLivros::class, 'destroy'])->name('deletaLivro');
Route::get('/livro', [App\Http\Controllers\ControladorLivros::class, 'index'])->name('exibeLivros');
Route::get('/livro/editar/{id}', [App\Http\Controllers\ControladorLivros::class, 'edit'])->name('editarLivro');
Route::post('/livro/{id}', [App\Http\Controllers\ControladorLivros::class, 'update'])->name('atualizaLivro');
Route::get('/pesquisaLivro', [App\Http\Controllers\ControladorLivros::class, 'pesquisaLivro'])->name('pesquisaLivro');
Route::get('/procuraLivro', [App\Http\Controllers\ControladorLivros::class, 'procuraLivro'])->name('procuraLivro');

Route::post('/genero', [App\Http\Controllers\ControladorGeneros::class, 'store'])->name('gravaNovoGenero');
Route::get('/genero/novo', [App\Http\Controllers\ControladorGeneros::class, 'create'])->name('novoGenero');
Route::get('/genero/apagar/{id}', [App\Http\Controllers\ControladorGeneros::class, 'destroy'])->name('deletaGenero');
Route::get('/genero', [App\Http\Controllers\ControladorGeneros::class, 'index'])->name('exibeGeneros');
Route::get('/genero/editar/{id}', [App\Http\Controllers\ControladorGeneros::class, 'edit'])->name('editarGenero');
Route::post('/genero/{id}', [App\Http\Controllers\ControladorGeneros::class, 'update'])->name('atualizaGenero');
Route::get('/pesquisaGenero', [App\Http\Controllers\ControladorGeneros::class, 'pesquisaLivro'])->name('pesquisaGenero');
Route::get('/pesquisaGenero', [App\Http\Controllers\ControladorGeneros::class, 'procuraLivro'])->name('procuraGenero');

Route::post('/membro', [App\Http\Controllers\ControladorMembros::class, 'store'])->name('gravaNovoMembro');
Route::get('/membro/novo', [App\Http\Controllers\ControladorMembros::class, 'create'])->name('novoMembro');
Route::get('/membro/apagar/{id}', [App\Http\Controllers\ControladorMembros::class, 'destroy'])->name('deletaMembro');
Route::get('/membro', [App\Http\Controllers\ControladorMembros::class, 'index'])->name('exibeMembros');
Route::get('/membro/editar/{id}', [App\Http\Controllers\ControladorMembros::class, 'edit'])->name('editarMembro');
Route::post('/membro/{id}', [App\Http\Controllers\ControladorMembros::class, 'update'])->name('atualizaMembro');
Route::get('/pesquisaMembro', [App\Http\Controllers\ControladorMembros::class, 'pesquisaLivro'])->name('pesquisaMembro');
Route::get('/procuraMembro', [App\Http\Controllers\ControladorMembros::class, 'procuraLivro'])->name('procuraMembro');

Route::post('/emprestimo', [App\Http\Controllers\ControladorEmprestimos::class, 'store'])->name('gravaNovoEmprestimo');
Route::get('/emprestimo/novo', [App\Http\Controllers\ControladorEmprestimos::class, 'create'])->name('novoEmprestimo');
Route::get('/emprestimo/apagar/{id}', [App\Http\Controllers\ControladorEmprestimos::class, 'destroy'])->name('deletaEmprestimo');
Route::get('/emprestimos', [App\Http\Controllers\ControladorEmprestimos::class, 'index'])->name('exibeEmprestimos');