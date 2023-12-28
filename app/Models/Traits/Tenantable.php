<?php

namespace App\Models\Traits;

use App\Models\Space;
use App\Scopes\TenantScope;

trait Tenantable{

    protected static function bootTenantable()
    {
        static::addGlobalScope(new TenantScope());
        
        if (session()->has('space_id') && !is_null(session('space_id'))) {
            static::creating(function ($model) {
                $model->space_id = session('space_id');
            });
        }
    }

    public function tenant(){
        return $this->belongsTo(Space::class);
    }
}