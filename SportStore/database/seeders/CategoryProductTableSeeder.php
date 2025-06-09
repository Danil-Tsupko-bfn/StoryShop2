<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_product')->delete();
        
        \DB::table('category_product')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'product_id' => 1,
            ),
            1 => 
            array (
                'category_id' => 2,
                'product_id' => 2,
            ),
            2 => 
            array (
                'category_id' => 2,
                'product_id' => 3,
            ),
            3 => 
            array (
                'category_id' => 2,
                'product_id' => 4,
            ),
            4 => 
            array (
                'category_id' => 1,
                'product_id' => 5,
            ),
            5 => 
            array (
                'category_id' => 1,
                'product_id' => 6,
            ),
            6 => 
            array (
                'category_id' => 5,
                'product_id' => 7,
            ),
            7 => 
            array (
                'category_id' => 5,
                'product_id' => 8,
            ),
            8 => 
            array (
                'category_id' => 6,
                'product_id' => 9,
            ),
            9 => 
            array (
                'category_id' => 6,
                'product_id' => 10,
            ),
        ));
        
        
    }
}