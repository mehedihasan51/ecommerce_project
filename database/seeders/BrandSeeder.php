<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder {
    public function run(): void {
        DB::table('brands')->insert([
            [
                'id'             => 1,
                'brandName'    => 'T-shirt',
                'brandImg'    => 'uploads/brands/brand_damo.jpg',
                'created_at'     => '2024-12-08 05:08:00',
                'updated_at'     => '2024-12-08 05:08:00',
            ],
        ]);
    }
}
