<?php

namespace App\Models\Traits;

use App\Models\Tenant;
use App\Scopes\TentantScope;

trait Tenantable
{
    protected static function bootTenantable()
    {
        static::addGlobalScope(new TentantScope);
        
        if(checkTenantId())
        {
            static::creating(function($model) {
                $model->tenant_id = session()->get('tenant_id');
            });
        }
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}