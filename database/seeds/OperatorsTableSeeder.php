<?php

use App\User;
use App\Models\Operator;
use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userOperator = User::findOrFail(4);

        $newOperator = Operator::create([
            'operator_name' => 'Travelly Adventure',
            'description' => 'Los mejores servicios en la costa para disfrutar en familia',
            'email_corp' => 'rubensabogal@gmail.com',
            'phone_corp' => '3112345678',
            'address' => 'Isla tierra bomba',
            'user_id' => $userOperator->id,
        ]);
    }
}
