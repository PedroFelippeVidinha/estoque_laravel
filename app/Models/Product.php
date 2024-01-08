<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Tenantable;

    protected $fillable = [

        // 'space_id',
        // 'category_id',
        'name',
        'tipo',
        'marca',
        'tamanho',
        'condicao',
        'fornecedor',
        'descricao',
        'foto',
        'patrimonio',
        'numero_patrimonial',
        'numero_controle',
        'observacao',
        
    ];
}
