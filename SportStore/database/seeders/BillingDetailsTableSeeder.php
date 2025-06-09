<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BillingDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('billing_details')->delete();
        
        \DB::table('billing_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'country' => 'UA',
                'billing_address' => 'LLL',
                'city' => 'aewfrgh',
                'state' => 'awtes5y',
                'zipcode' => '58000',
                'phone' => 'waergstrhdytj',
                'order_notes' => NULL,
                'created_at' => '2025-06-09 07:06:23',
                'updated_at' => '2025-06-09 07:06:23',
            ),
        ));
        
        
    }
}