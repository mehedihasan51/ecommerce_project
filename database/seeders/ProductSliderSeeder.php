<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSliderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_sliders')->insert([
            [
                'id'         => 1,
                'product_id' => 1, 
                'title'      => 'Slider 1',
                'short_des'  => 'This is new',
                'price'      => 200,
                'image'      => 'uploads/product_sliders/slider1.jpg',
                'created_at' => '2024-12-08 05:08:00',
                'updated_at' => '2024-12-08 05:08:00',
            ],
        ]);
    }
}
