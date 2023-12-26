<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'space_id',
        'category_id',
        'name',
        'tipo',
        'marca',
        'tamanho',
        'condição',
        'fornecedor',
        'descricao',
        'foto',
        'patrimonio',
        'numero_patrimonial',
        'numero_controle',
        'observacao',
        
    ];
}
