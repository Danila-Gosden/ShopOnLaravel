<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            DB::table('product_images')->insert([
                'img' => 'details_' . rand(1, 4) . '.jpg',
                'product_id' => $i
            ]);
        }
    }
}
