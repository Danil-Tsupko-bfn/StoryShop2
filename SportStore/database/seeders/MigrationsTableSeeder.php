<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 14,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 15,
                'migration' => '2014_10_12_100000_create_password_reset_tokens_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 16,
                'migration' => '2019_05_03_000001_create_customer_columns',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 17,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 18,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 19,
                'migration' => '2023_05_12_181950_create_categories_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 20,
                'migration' => '2023_05_12_182019_create_products_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 21,
                'migration' => '2023_05_13_150158_create_category_product_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 22,
                'migration' => '2023_05_13_201931_create_orders_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 23,
                'migration' => '2023_05_13_201932_create_order_items_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 24,
                'migration' => '2023_05_13_231915_create_billing_details_table',
                'batch' => 1,
            ),
        ));
        
        
    }
}