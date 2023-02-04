<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TentantScope implements Scope 
{
    public function apply($builder, $model)
    {
        if(checkTenantId()) 
        {
            $builder->where('tenant_id', session()->get('tenant_id'));
        }
    }
}