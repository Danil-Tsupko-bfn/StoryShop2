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
        
        
        
    }
}