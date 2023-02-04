<?php

namespace Modules\Empresas\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmpresasDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'tenant_id' => 1,
            'razao_social' => 'C2Desk Soluções em TI LTDA',
            'nome_fantasia' => 'C2Desk',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('empresas')->insert([
            'tenant_id' => 2,
            'razao_social' => 'Radial Solar LTDA',
            'nome_fantasia' => 'Radial Solar',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
