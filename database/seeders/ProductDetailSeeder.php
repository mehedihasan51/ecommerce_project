<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_details')->insert([
            [
                'id'         => 1,
                'product_id' => 1, 
                'img1'      => 'uploads/product_deatils/image1.jpg',
                'img2'      => 'uploads/product_deatils/image2.jpg',
                'img3'      => 'uploads/product_deatils/image3.jpg',
                'img4'      => 'uploads/product_deatils/image4.jpg',
                'des'        => 'This is new',
                'color'      => 'black',
                'size'       => 'M',
                'created_at' => '2024-12-08 05:08:00',
                'updated_at' => '2024-12-08 05:08:00',
            ],

        ]);
    }
}
