<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'tenant_id' => 1,
            'name' => 'thiago',
            'email' => 'thiago.nobre@c2desk.com.br',
            'password' => bcrypt('+1950690@#nU'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
