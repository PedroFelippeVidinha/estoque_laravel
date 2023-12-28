<?php 

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (session()->has('space_id') && !is_null(session('space_id'))) {
            $builder->where('space_id', session('space_id'));
        }
    }
}