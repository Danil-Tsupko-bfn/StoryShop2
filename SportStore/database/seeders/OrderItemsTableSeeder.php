<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'price' => '20.00',
                'created_at' => '2025-06-09 07:06:24',
                'updated_at' => '2025-06-09 07:06:24',
            ),
        ));
        
        
    }
}