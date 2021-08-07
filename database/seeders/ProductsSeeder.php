<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            DB::table('products')->insert([
                'product_name' => Str::random(10),
                'product_description' => Str::random(500),
                'current_price' => rand(1, 999),
                'old_price' => rand(1, 999),
                'in_stock' => rand(0, 1),
            ]);
        }
    }
}
