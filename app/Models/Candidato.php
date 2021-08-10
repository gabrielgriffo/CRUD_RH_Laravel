<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
        'nome',
        'idade',
        'sexo',
        'email',
        'cpf',
        'telefone',
        'vaga',
        'linguagem'
    ];
    use HasFactory;
}









