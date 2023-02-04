<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenants')->insert([
            'name' => 'C2desk Soluções em TI',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tenants')->insert([
            'name' => 'Radial Solar LTDA',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
