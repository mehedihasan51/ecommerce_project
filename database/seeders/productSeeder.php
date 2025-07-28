<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder {
    public function run(): void {
        DB::table('products')->insert([
            [
                'id'             => 1,
                'category_id'    => 1,
                'brand_id'       => 1,
                'title'          => 'This is new T-shirt',
                'short_des'    => '<p>This is a new T-shirt description.</p>',
                'price'         => 1500,
                'discount'      =>100,
                'discount_price' => 1200,
                'image'     => 'uploads/products/product_damo.jpg',
                'stock'     => 5,
                'star'      => 4,
                'remark'    => 'popular',
                'created_at'     => '2024-12-08 05:08:00',
                'updated_at'     => '2024-12-08 05:08:00',
            ],
            [
                'id'             => 2,
                'category_id'    => 1,
                'brand_id'       => 1,
                'title'          => 'This is new T-shirt',
                'short_des'    => '<p>This is a new T-shirt description.</p>',
                'price'         => 1500,
                'discount'      =>100,
                'discount_price' => 1200,
                'image'     => 'uploads/products/product_damo.jpg',
                'stock'     => 5,
                'star'      => 4,
                'remark'    => 'popular',
                'created_at'     => '2024-12-08 05:08:00',
                'updated_at'     => '2024-12-08 05:08:00',
            ],
        ]);

    }
}
