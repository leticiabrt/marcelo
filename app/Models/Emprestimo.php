<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable = ['DataEmprestimo, DataDevolucao'];
    public function livros(){
        return $this->belongsTo('App\Models\Livros');
    }
    public function membro(){
        return $this->belongsTo('App\Models\Membros');
    }
}