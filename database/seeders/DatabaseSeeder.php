<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
           $this->call(CategorySeeder::class);
           $this->call(BrandSeeder::class);
           $this->call(ProductSeeder::class);
           $this->call(ProductSliderSeeder::class);
           $this->call(ProductDetailSeeder::class);
           $this->call(SslcommerzAccountSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
