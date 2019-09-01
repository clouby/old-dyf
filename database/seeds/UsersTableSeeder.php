<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'nickname'  => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('1234'),
        ]);

        $admin->assignRole('superadmin');

        $user_finanzas = User::create([
            'nickname'  => 'Gustavo Silva',
            'email'     => 'gsilva@gmail.com',
            'password'  => bcrypt('1234'),
        ]);

        $user_finanzas->assignRole('finanzas');

        $user_moderador = User::create([
            'nickname'  => 'Erick Acevedo',
            'email'     => 'acevedor@gmail.com',
            'password'  => bcrypt('1234'),
        ]);

        $user_moderador->assignRole('moderador');

        $user_operador = User::create([
            'nickname'  => 'Ruben Sabogal',
            'email'     => 'rsabogal@gmail.com',
            'password'  => bcrypt('1234'),
        ]);

        $user_operador->assignRole('operador');

        $user_cliente = User::create([
            'nickname'  => 'Luis Zarate',
            'email'     => 'luchoz@gmail.com',
            'password'  => bcrypt('1234'),
        ]);

        $user_cliente->assignRole('cliente');
        
    }
}
