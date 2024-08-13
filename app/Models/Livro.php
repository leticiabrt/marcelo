<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;
    protected $fillable = ['titulo, autor, paginas'];
    public function emprestimo(){
        return $this->hasMany('App\Models\Emprestimos', 'livros_id');
    }
    public function membro(){
        return $this->hasMany('App\Models\Membros', 'membros_id');
    }
    public function genero(){
        return $this->hasMany('App\Models\Generos', 'generos_id');
    }
}
