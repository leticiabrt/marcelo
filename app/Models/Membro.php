<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membros extends Model
{
    use HasFactory;
    protected $fillable = ['nome, CPF, telefone'];
    public function emprestimo(){
        return $this->hasMany('App\Models\Emprestimos', 'emprestimos_id');
    }
    public function livro(){
        return $this->belongsTo('App\Models\Livros');
    }
}