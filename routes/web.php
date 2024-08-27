<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::post('/livro', [App\Http\Controllers\ControladorLivros::class, 'store'])->name('gravaNovoLivro');
Route::get('/livro/novo', [App\Http\Controllers\ControladorLivros::class, 'create'])->name('novoLivro');
Route::get('/livro/apagar/{id}', [App\Http\Controllers\ControladorLivros::class, 'destroy'])->name('deletaLivro');
Route::get('/livro', [App\Http\Controllers\ControladorLivros::class, 'index'])->name('exibeLivros');
Route::get('/livro/editar/{id}', [App\Http\Controllers\ControladorLivros::class, 'edit'])->name('editaLivro');
Route::post('/livro/{id}', [App\Http\Controllers\ControladorLivros::class, 'update'])->name('atualizaLivro');


Route::post('/genero', [App\Http\Controllers\ControladorGeneros::class, 'store'])->name('gravaNovoGenero');
Route::get('/genero/novo', [App\Http\Controllers\ControladorGeneros::class, 'create'])->name('novoGenero');
Route::get('/genero/apagar/{id}', [App\Http\Controllers\ControladorGeneros::class, 'destroy'])->name('deletaGenero');
Route::get('/genero', [App\Http\Controllers\ControladorGeneros::class, 'index'])->name('exibeGeneros');
Route::get('/genero/editar/{id}', [App\Http\Controllers\ControladorGeneros::class, 'edit'])->name('editarGenero');
Route::post('/genero/{id}', [App\Http\Controllers\ControladorGeneros::class, 'update'])->name('atualizaGenero');


Route::post('/membro', [App\Http\Controllers\ControladorMembros::class, 'store'])->name('gravaNovoMembro');
Route::get('/membro/novo', [App\Http\Controllers\ControladorMembros::class, 'create'])->name('novoMembro');
Route::get('/membro/apagar/{id}', [App\Http\Controllers\ControladorMembros::class, 'destroy'])->name('deletaMembro');
Route::get('/membro', [App\Http\Controllers\ControladorMembros::class, 'index'])->name('exibeMembros');
Route::get('/membro/editar/{id}', [App\Http\Controllers\ControladorMembros::class, 'edit'])->name('editarMembro');
Route::post('/membro/{id}', [App\Http\Controllers\ControladorMembros::class, 'update'])->name('atualizaMembro');

Route::post('/emprestimo', [App\Http\Controllers\ControladorEmprestimos::class, 'store'])->name('gravaNovoEmprestimo');
Route::get('/emprestimo/novo', [App\Http\Controllers\ControladorEmprestimos::class, 'create'])->name('novoEmprestimo');
Route::get('/emprestimo/apagar/{id}', [App\Http\Controllers\ControladorEmprestimos::class, 'destroy'])->name('deletaEmprestimo');
Route::get('/emprestimo', [App\Http\Controllers\ControladorEmprestimos::class, 'index'])->name('exibeEmprestimos');
Route::get('/emprestimo/editar/{id}', [App\Http\Controllers\ControladorEmprestimos::class, 'edit'])->name('editarEmprestimo');
Route::post('/emprestimo/{id}', [App\Http\Controllers\ControladorEmprestimos::class, 'update'])->name('atualizaEmprestimo');