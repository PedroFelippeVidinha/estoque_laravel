<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'complexo',
        'uf_id'
    ];

    public function ufs() {
        return $this->belongsTo(Uf::class);
    }
    
}

