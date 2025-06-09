<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'status' => 'pending',
                'total' => '20.00',
                'session_id' => 'cs_test_a1sZhpZsqWRvbY2VgTEAHos7r5EDkqwDNjvdzvkreC25sQXcIbwvzrYmza',
                'created_at' => '2025-06-09 07:06:24',
                'updated_at' => '2025-06-09 07:06:24',
            ),
        ));
        
        
    }
}