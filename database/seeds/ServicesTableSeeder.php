<?php

use App\Models\{Category, Operator, Service};
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $islaCategory = Category::findOrFail(3);
        $travelly = Operator::findOrFail(1);

        Service::create([
            'service_name' => 'Servicio #1',
            'price' => '228000',
            'category_id' => $islaCategory->id,
            'operator_id' => $travelly->id,
        ]);

        Service::create([
            'service_name' => 'Servicio #2',
            'price' => '442000',
            'category_id' => $islaCategory->id,
            'operator_id' => $travelly->id,
        ]);

        Service::create([
            'service_name' => 'Servicio #3',
            'price' => '680000',
            'category_id' => $islaCategory->id,
            'operator_id' => $travelly->id,
        ]);
    }
}
