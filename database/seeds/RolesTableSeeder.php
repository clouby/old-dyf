<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'finanzas']);
        Role::create(['name' => 'moderador']);
        Role::create(['name' => 'operador']);
        Role::create(['name' => 'cliente']);
    }
}
