<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    protected $categories = [
        array(
            'category'  => 'Experiencias Gastronómicas',
            'image'     => '/dist/images/restaurantes.png',
        ),
        array(
            'category'  => 'Experiencias Náuticas',
            'image'     => '/dist/images/museos.png',
        ),
        array(
            'category'  => 'Islas y Playas',
            'image'     => '/dist/images/beach.png',
        ),
        array(
            'category'  => 'Tour y Aventura',
            'image'     => '/dist/images/chivas.png',
        ),
        array(
            'category'  => 'Transfer',
            'image'     => '/dist/images/vida.png',
        ),
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create([
                'category'  => $category['category'],
                'image'     => $category['image'],
            ]);
        }
    }
}
