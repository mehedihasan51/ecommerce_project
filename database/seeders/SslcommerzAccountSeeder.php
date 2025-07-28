<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SslcommerzAccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sslcommerz_accounts')->insert([
            [
                'store_id' => 'moder665cae2766c24',
                'store_passwd' => 'moder665cae2766c24@ssl',
                'init_url' => 'https://sandbox.sslcommerz.com/gwprocess/v4/api.php', // or the appropriate live URL
                'currency' => 'BDT',
                'success_url' => 'http://127.0.0.1:8000/PaymentSuccess',
                'fail_url' => 'http://127.0.0.1:8000/PaymentFail',
                'cancel_url' => 'http://127.0.0.1:8000/PaymentCancel',
                'ipn_url' => 'http://127.0.0.1:8000/PaymentIPN',
                'created_at' => '2024-12-08 05:08:00',
                'updated_at' => '2024-12-08 05:08:00',
            ],
        ]);
    }
}
