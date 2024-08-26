<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo, autor, genero'];
    public function emprestimo(){
        return $this->hasMany('App\Models\Emprestimos', 'livros_id');
    }
    public function membro(){
        return $this->hasMany('App\Models\Membros', 'membros_id');
    }
}
