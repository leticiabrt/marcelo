<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $fillable = ['Genero, Descricao'];
    public function livro(){
        return $this->hasMany('App\Models\Livros', 'livro_id');
    }
} 