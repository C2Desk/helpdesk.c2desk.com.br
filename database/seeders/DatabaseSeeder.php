<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Empresas\Database\Seeders\EmpresasDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TenantsTableSeeder::class,
            UsersTableSeeder::class,
            EmpresasDatabaseSeeder::class
        ]);
    }
}
