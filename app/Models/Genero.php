<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    protected $fillable = ['genero, descricao'];
    public function livro(){
        return $this->belongsTo('App\Models\Livros');
    }
} 