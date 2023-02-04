<?php

namespace Modules\Empresas\Entities;

use App\Models\Tenant;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Empresa extends Model
{
    use HasFactory, Tenantable;

    protected $fillable = [
        'id',
        'tenant_id',
        'razao_social',
        'nome_fantasia',
        'created_at',
        'updated_at'
    ];

    public function tenants()
    {
        return $this->hasOne(Tenant::class,'id', 'tenant_id');
    }
}
