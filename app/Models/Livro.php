<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['Titulo, Autor, Genero', 'Prop'];
    public function emprestimo(){
        return $this->hasMany('App\Models\Emprestimos', 'livros_id');
    }
    public function membro(){
        return $this->hasMany('App\Models\Membros', 'membros_id');
    }

    public function Genero(){
        return $this->belongTo('App\Models\Livros');
    }
}
