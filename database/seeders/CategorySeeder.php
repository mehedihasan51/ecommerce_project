<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder {
    public function run(): void {
        DB::table('categories')->insert([
            [
                'id'             => 1,
                'categoryName'    => 'This is t-shart',
                'categoryImg'    => 'uploads/category/demo_pic.jpg',
                'created_at'     => '2024-12-08 05:08:00',
                'updated_at'     => '2024-12-08 05:08:00',
            ],
        ]);
    }
}
