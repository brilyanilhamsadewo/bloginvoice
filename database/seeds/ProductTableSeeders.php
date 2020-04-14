<?php

use Illuminate\Database\Seeder;

class ProductTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => "Macbook pro 13 2017",
            'description' => "macbook pro keluaran apple tahun 2017",
            'price' => 18500000,
            'stock' => 5
        ]);

        DB::table('products')->insert([
            'title' => "Asus ROG Slim",
            'description' => "brand ROG",
            'price' => 10500000,
            'stock' => 15
        ]);
    }
}
