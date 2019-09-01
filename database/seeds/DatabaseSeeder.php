<?php

use Illuminate\Database\Seeder;
use App\Models\{Category, Operator, Service};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            OperatorsTableSeeder::class,
            ServicesTableSeeder::class,
        ]);
    }
}
