<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Whey Protein',
                'SKU' => 'WP-001',
                'price' => 799,
                'old_price' => 999,
                'quantity' => 25,
                'brief_description' => 'Premium whey protein for muscle gain.',
                'stock_status' => 'instock',
                //'image' => 'images/products/whey.png',
                'description' => 'High-quality whey protein with great taste.',
            ],
            [
                'name' => 'BCAA 4:1:1',
                'SKU' => 'BCAA-002',
                'price' => 499,
                'old_price' => 599,
                'quantity' => 40,
                'brief_description' => 'Amino acids for recovery.',
                'stock_status' => 'instock',
                //'images' => 'images/products/bcaa.png',
                'description' => 'Branched-chain amino acids to reduce fatigue and soreness.',
            ],
        ]);
    }
}
