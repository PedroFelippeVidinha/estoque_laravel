<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    use HasFactory;


    protected $table = 'ufs';

    protected $fillable = [
        'uf',
        'name'
    ];

    public function spaces() {
       return $this->hasMany(Space::class, 'uf_id', 'id');
    }
}
