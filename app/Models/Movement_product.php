<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement_product extends Model
{
    use HasFactory, Tenantable;

    protected $fillable = [
        'space_id',
        'product_id',
        'movement_id',
        'user_id',
        'quantidade',
        'resp_retirada',
        'local_retirada',
        'localizacao',
        'descricao',
        'observacao',
        'data_entrada',
        'data_retirada',
    ];
}
